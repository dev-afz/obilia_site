<?php

namespace App\Http\Controllers\ServiceProvider\Workspace;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Events\Workspace\MessageEvent;
use App\Managers\FileManager;
use App\Models\Workspace;

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

        $workspace = Workspace::where('id', $request->workspace)
            ->where(function ($q) {
                $q->where('user_id', auth()->user()->id)
                    ->orWhere('client_id', auth()->user()->id);
            })
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

        $workspace = Workspace::where('id', $request->workspace)
            ->where(function ($q) {
                $q->where('user_id', auth()->user()->id)
                    ->orWhere('client_id', auth()->user()->id);
            })->where('id', $request->workspace)
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
            to: ($user->id === $workspace->user_id) ? $workspace->client_id : $workspace->user_id,
            from: [
                'id' => $user->id,
                'name' => $user->name,
                'images' => $user->images,
            ],
            workspace: $workspace->only(['id', 'name', 'slug', 'client_id', 'user_id', 'contract_id', 'status', 'created_at', 'updated_at'])
        ));


        return response()->json([
            'message' => 'Message sent successfully',
            'html' => $return_html,
        ]);
    }




    public function loadMessages(Request $request)
    {
        $request->validate([
            'workspace' => 'required|integer',
        ]);

        $user  = $request->user();

        $workspace =  Workspace::where('id', $request->workspace)
            ->where(function ($q) {
                $q->where('user_id', auth()->user()->id)
                    ->orWhere('client_id', auth()->user()->id);
            })
            ->with(['chat'])
            ->firstOrFail();

        $chat = $workspace->chat;

        $messages = $chat->messages()->with(['media', 'replied' => ['media']])
            ->orderBy('id', 'desc')
            ->take(10)->get();


        $return_html = View::make('components.workspace.chat.messages', [
            'messages' => $messages->reverse(),
        ])->render();

        return response()->json([
            'message' => 'Messages loaded successfully',
            'html' => $return_html,
        ]);
    }
}
