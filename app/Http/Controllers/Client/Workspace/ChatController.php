<?php

namespace App\Http\Controllers\Client\Workspace;

use Illuminate\Http\Request;
use App\Managers\FileManager;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Events\Workspace\MessageEvent;

class ChatController extends Controller
{
    use FileManager;
    public function messages(Request $request)
    {
        $request->validate([
            'workspace' => 'required|integer',
            'page' => 'nullable|integer',
        ]);


        $user  = $request->user();

        $workspace = $user->client_workspace()->where('id', $request->workspace)
            ->with(['chat'])
            ->firstOrFail();

        $chat = $workspace->chat;

        $messages = $chat->messages()
            ->with(['media', 'replied' => ['media']])->orderBy('id', 'desc')
            ->orderBy('id', 'desc')
            ->simplePaginate(10, ['*'], 'page', $request->page);


        $isLast = !$messages->hasMorePages();

        $return_html = View::make('components.workspace.chat.messages', [
            'messages' => $messages->reverse(),
        ])->render();

        return response()->json([
            'message' => 'Messages loaded successfully',
            'html' => $return_html,
            'isLast' => $isLast,
        ]);
    }


    public function sendMessages(Request $request)
    {
        $request->validate([
            'message' => 'required_without:image|max:3000|nullable|string',
            'workspace' => 'required|integer',
            'image' => 'required_without:message|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $user  = $request->user();

        $workspace = $user->client_workspace()->where('id', $request->workspace)
            ->with(['chat'])
            ->firstOrFail();

        $chat = $workspace->chat;


        $message = $chat->messages()->create([
            'message' => $request->message,
            'sender_id' => auth()->user()->id,
            'replied_to' => ($request->reply_to && $request->reply_to !== "") ? $request->reply_to : null,

        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $type = $file->getMimeType();
            $media = [
                'file' => $this->uploadFileToDO($file, 'workspace/chat/media', 'img'),
                'type' => $type,
                'created_at' => now(),
            ];
            $message->media()->create($media);
        }

        $message->load(['media', 'replied' => ['media']]);

        $return_html = View::make('components.workspace.chat.message', [
            'message' => $message,
            'for' => 'sender',
        ])->render();

        $message_html = View::make('components.workspace.chat.message', [
            'message' => $message,
            'for' => 'reply',
        ])->render();


        broadcast(new MessageEvent(
            message: $message_html,
            chat: $workspace->chat->uuid,
            to: $workspace->user_id,
            from: [
                'id' => $user->id,
                'name' => $user->name,
                'images' => $user->images,
            ],
            workspace: $workspace->only(['id', 'name', 'slug', 'client_id', 'user_id', 'contract_id', 'status', 'created_at', 'updated_at']),
        ));


        return response()->json([
            'message' => 'Message sent successfully',
            'html' => $return_html,
            'uuid' => $request->uuid,
        ]);
    }




    public function loadMessages(Request $request)
    {
        $request->validate([
            'workspace' => 'required|integer',
        ]);

        $user  = $request->user();

        $workspace = $user->client_workspace()->where('id', $request->workspace)
            ->with(['chat'])
            ->firstOrFail();

        $chat = $workspace->chat;

        $messages = $chat->messages()->with(['media', 'replied' => ['media']])->orderBy('id', 'desc')->take(10)->get();


        $return_html = View::make('components.workspace.chat.messages', [
            'messages' => $messages->reverse(),
        ])->render();

        return response()->json([
            'message' => 'Messages loaded successfully',
            'html' => $return_html,
        ]);
    }
}
