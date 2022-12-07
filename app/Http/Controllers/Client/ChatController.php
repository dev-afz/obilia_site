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

class ChatController extends Controller
{
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
        ])->simplePaginate(20);

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

        $request->validate([
            'id' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'uuid' => 'required|string|max:255',
            'media' => 'nullable|array',
            'media.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        return event(new TestChatEvent());

        // $chat_id  = Chat::where('uuid', $request->id)->first(['id'])->id;

        // $message =  Message::create([
        //     'chat_id' => $chat_id,
        //     'sender_id' => auth()->user()->id,
        //     'message' => $request->message,
        // ]);

        // return response()->json([
        //     'status' => 'success',
        //     'message' => $message,
        //     'uuid' => $request->uuid
        // ]);
    }
}
