<?php

namespace App\Http\Controllers\Client;

use App\Models\Chat;
use App\Models\User;
use App\Models\Message;
use App\Events\TestEvent;
use Illuminate\Support\Str;
use App\Events\MessageEvent;
use Illuminate\Http\Request;
use App\Events\TestChatEvent;
use App\Managers\FileManager;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class ChatController extends Controller
{
    use FileManager;
    public function index(Request $request)
    {

        $chats = auth()->user()->chats()
            ->global()
            ->with([
                'participant' => ['user:id,name,images']
            ])->get();


        $active_chats = $chats->filter(function ($chat) {
            return $chat->status == 'active';
        });

        $closed_chats = $chats->filter(function ($chat) {
            return $chat->status == 'closed';
        });


        return view('dashboard.client.chat', compact('active_chats', 'closed_chats'));
    }

    public function messages(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|string|max:255'
        ]);

        $chats = auth()->user()->chats()
            ->global()
            ->where('chats.uuid', $request->chat_id)
            ->with(['participant' => ['user:id,uuid,name,images']])
            ->firstOrFail();

        $messages = $chats->messages()->with([
            'media', 'replied' => ['media', 'contract'], 'contract'
        ])
            ->latest()
            ->simplePaginate(20)
            ->reverse();

        $chat_data = [
            'user' => $chats->participant->user->only(['uuid', 'name', 'images']),
            'id' => $chats->uuid,
            'name' => $chats->name,
            'status' => $chats->status,
        ];


        $html = view('components.chat.messages', compact('messages'))->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
            'chat_data' => $chat_data,

        ]);
    }

    public function sendMessages(Request $request)
    {
        // return $request->all();

        $request->validate([
            'id' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'message' => 'required_without:images|max:2000',
            'uuid' => 'required|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reply_to' => 'nullable|integer|exists:messages,id|numeric'
        ]);
        $chat = auth()->user()->chats()
            ->global()
            ->where('chats.uuid', $request->id)->firstOrFail();

        if ($chat->status == 'closed') {
            throw ValidationException::withMessages([
                'chat' => 'Chat is closed'
            ]);
        }


        $message = $chat->messages()->create([
            'message' => $request->message,
            'sender_id' => auth()->user()->id,
            'replied_to' => ($request->reply_to && $request->reply_to !== "") ? $request->reply_to : null,

        ]);
        $media = null;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $type = $file->getMimeType();

                $media[] = [
                    'file' => $this->uploadFileToDO($file, 'chat/media', 'file'),
                    'type' => $type,
                    'created_at' => now(),
                ];
            }
            $message->media()->createMany($media);
        }

        $message->load(['media', 'contract', 'replied' => ['media', 'contract']]);

        $for = 'reply';

        $html =  view('components.chat.message', compact('message', 'for'))->render();

        $for = 'sender';
        event(new MessageEvent(
            message: view('components.chat.message', compact('message', 'for'))->render(),
            from: auth()->user()->only(['uuid', 'name', 'email']),
            time: $message->created_at,
            media: $media,
            chat: $chat->uuid,
            to: $chat->participant->user->uuid,
        ));

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully',
            'html' => $html,
        ]);
    }

    public function loadMessages(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|string|max:255',
            'page' => 'required|integer'
        ]);



        $chats = auth()->user()->chats()
            ->global()
            ->where('chats.uuid', $request->chat_id)
            ->firstOrFail();


        $messages = $chats->messages()->with([
            'media',
            'replied' => ['media', 'contract'], 'contract'
        ])
            ->orderBy('id', 'desc')
            ->simplePaginate(20, ['*'], 'page', $request->page)
            ->reverse();




        $html = view('components.chat.messages', compact('messages'))->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }


    public function sendContract(Request $request)
    {
        return $request->all();
    }
}
