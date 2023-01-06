<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Models\Chat;
use App\Models\Message;
use App\Events\MessageEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        $chats = auth()->user()->chats()->with([
            'participant' => ['user:id,name,images'],
            'job:id,title',
        ])->get();


        return view('dashboard.service-provider.chat', compact('chats'));
    }

    public function messages(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|string|max:255'
        ]);

        $chats = auth()->user()->chats()->where('chats.uuid', $request->chat_id)
            ->with(['participant' => ['user:id,uuid,name,images']])
            ->firstOrFail();

        $messages = $chats->messages()->with([
            'media',
        ])
            ->orderBy('id', 'desc')
            ->simplePaginate(20)
            ->reverse();

        $chat_data = [
            'user' => $chats->participant->user->only(['uuid', 'name', 'images']),
            'id' => $chats->uuid,
            'name' => $chats->name,
        ];


        $html = view('components.chat.messages', compact('messages'))->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
            'chat_data' => $chat_data
        ]);
    }

    public function sendMessages(Request $request)
    {
        // return $request->all();

        $request->validate([
            'id' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'message' => 'required_without:media|string|max:2000',
            'uuid' => 'required|string|max:255',
            'media' => 'nullable|array',
            'media.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $chat = auth()->user()->chats()->where('chats.uuid', $request->id)->firstOrFail();
        $message = $chat->messages()->create([
            'message' => $request->message,
            'sender_id' => auth()->user()->id,
        ]);
        $media = null;
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $type = $file->getMimeType();
                $media[] = [
                    'file' => $this->uploadFileToDO($file, 'chat/media', 'file'),
                    'type' => $type,
                    'created_at' => now(),
                ];
            }
            $message->media()->createMany($media);
        }


        $for = 'sender';
        event(new MessageEvent(
            message: view('components.chat.message', compact('message', 'for'))->render(),
            time: $message->created_at,
            media: $media,
            chat: $chat->uuid,
            to: $chat->participant->user->uuid,
        ));
        $canDelete = true;
        $dropdown = view('components.chat.message-dropdown', compact('message', 'canDelete'))->render();
        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully',
            'dropdown' => $dropdown,
        ]);
    }


    public function loadMessages(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|string|max:255',
            'page' => 'required|integer'
        ]);



        $chats = auth()->user()->chats()->where('chats.uuid', $request->chat_id)
            ->firstOrFail();

        $messages = $chats->messages()->with([
            'media', 'sender:id,uuid,name,images'
        ])
            ->orderBy('id', 'desc')
            ->simplePaginate(20, ['*'], 'page', $request->page)
            ->reverse();

        $html = view('components.chat.messages', compact('messages'))->render();

        return response()->json([
            'status' => 'success',
            'html' => $html
        ]);
    }
}
