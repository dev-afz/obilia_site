<?php

namespace App\Services\ServiceProvider;

use Str;
use App\Models\Message;
use App\Models\Contract;
use App\Events\MessageEvent;
use App\Models\MessageContract;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ContractActionService
{


    public $contract;
    public $user;
    public function __construct()
    {
    }




    public function acceptContract(MessageContract $contract, User $user)
    {
        $this->contract = $contract;
        $this->user = $user;
        DB::beginTransaction();


        $this->createContract();
        $contract->update([
            'status' => 'accepted',
        ]);
        $html = $this->sendMessage();
        DB::commit();

        return response()->json([
            'message' => 'Contract Accepted',
            'html' => $html,
        ]);
    }




    private function createContract(): void
    {
        $contractData = json_decode($this->contract->contract, true);
        $milestones = $contractData['milestones'];
        $contract = Contract::create([
            'title' => $contractData['project_title'],
            'start_date' => $contractData['contract_date'],
            'cost' => $contractData['project_cost'],
            'description' => $contractData['project_description'],
            'status' => 'pending',
            'client_id' => $this->contract->send_by,
            'user_id' => $this->contract->send_to,
            'job_id' => $contractData['job_id'],
        ]);

        foreach ($milestones as $key => $m) {
            $contract->milestones()->create([
                'title' => $m['title'],
                'cost' => $m['amount'],
                'description' => $m['description'],
            ]);
        }

        $contract->workspaces()->create([
            'name' => $contractData['project_title'] . ' workspace',
            'slug' => Str::slug($contractData['project_title'] . ' workspace'),
            'client_id' => $this->contract->send_by,
            'user_id' => $this->contract->send_to,
        ]);
    }

    private function sendMessage()
    {
        $message = $this->contract->message;


        $new_message = Message::create([
            'chat_id' => $message->chat_id,
            'sender_id' => $this->contract->send_to,
            'message' => 'Contract Accepted',
            'replied_to' => $message->id,
        ]);
        $chat = $message->chat;
        $receiver = User::find($this->contract->send_by);
        $chat->update([
            'status' => 'closed',
        ]);


        $new_message->load(['replied']);
        $for = 'reply';
        $html =  view('components.chat.message', [
            'message' => $new_message,
            'for' => $for
        ])->render();

        $for = 'sender';
        event(new MessageEvent(
            message: view('components.chat.message', compact('message', 'for'))->render(),
            from: $this->user->only(['uuid', 'name', 'email']),
            time: $message->created_at,
            media: [],
            chat: $chat->uuid,
            to: $receiver->uuid,
        ));

        return $html;
    }
}
