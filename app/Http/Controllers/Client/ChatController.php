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
use App\Http\Controllers\Controller;
use App\Managers\FileManager;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    use FileManager;
    public function index()
    {


        $chats = auth()->user()->chats()->with([
            'participant' => ['user:id,name,images']
        ])->get();


        return view('dashboard.client.chat', compact('chats'));
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
            'media'
        ])
            ->latest()
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
                Log::info($type);
                $media[] = [
                    'file' => $this->uploadFileToDO($file, 'chat/media', 'file'),
                    'type' => $type,
                    'created_at' => now(),
                ];
            }
            $message->media()->createMany($media);
        }


        event(new MessageEvent(
            $request->message,
            $message->created_at,
            $media,
            $chat->uuid,
            $chat->participant->user->uuid,
        ));

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully'
        ]);
    }

    public function loadMessages(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|string|max:255',
            'page' => 'required|integer'
        ]);

        Log::info($request->all());


        $chats = auth()->user()->chats()->where('chats.uuid', $request->chat_id)
            ->with(['participant' => ['user:id,uuid,name,images']])
            ->firstOrFail();

        $messages = $chats->messages()->with([
            'media'
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
}
