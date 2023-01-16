<?php

namespace App\Http\Controllers\Client;

use App\Models\Message;
use App\Events\MessageEvent;
use Illuminate\Http\Request;
use App\Managers\FileManager;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContractController extends Controller
{
    use FileManager;
    public function create($chat_uuid)
    {
        $chat = auth()->user()
            ->chats()
            ->where('chats.uuid', $chat_uuid)
            ->active()
            ->firstOrFail();

        return view('dashboard.client.create-contract', compact('chat'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'chat_id' => 'required|exists:chats,uuid',
            'project_title' => 'required|string|max:255',
            'contract_date' => 'required|date',
            'project_cost' => 'required|numeric',
            'project_description' => 'required|string|max:10000',
            'milestones' => 'required|array',
            'milestones.*.title' => 'required|string|max:255',
            'milestones.*.amount' => 'required|numeric|lte:project_cost',
            'milestones.*.description' => 'required|string|max:10000',
            'contract_file' => 'required|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
        ]);

        $user = auth()->user();

        $chat = $user
            ->chats()
            ->where('chats.uuid', $request->chat_id)
            ->active()
            ->firstOrFail();



        DB::beginTransaction();
        $message = Message::create([
            'chat_id' => $chat->id,
            'sender_id' => $user->id,
        ]);

        $files = [];

        if ($request->hasFile('contract_file')) {
            foreach ($request->file('contract_file') as $file) {
                $files[] = $this->uploadFile($file, 'images/contracts');
            }
        }

        $contract_json = [
            'project_title' => $request->project_title,
            'contract_date' => $request->contract_date,
            'project_cost' => $request->project_cost,
            'project_description' => $request->project_description,
            'milestones' => $request->milestones,
            'contract_file' => $files,
        ];


        $message->contract()->create([
            'contract' => json_encode($contract_json),
            'send_by' => $user->id,
            'send_to' => $chat->participants()->where('user_id', '!=', $user->id)->first()->user_id,
        ]);

        DB::commit();


        $message->load(['media', 'contract', 'replied.media']);

        $for = 'reply';

        $html =  view('components.chat.message', compact('message', 'for'))->render();

        $for = 'sender';
        event(new MessageEvent(
            message: view('components.chat.message', compact('message', 'for'))->render(),
            from: $user->only(['uuid', 'name', 'email']),
            time: $message->created_at,
            media: [],
            chat: $chat->uuid,
            to: $chat->participant->user->uuid,
        ));

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully',
            'html' => $html,
        ]);
    }
}
