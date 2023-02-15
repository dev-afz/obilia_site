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


    /*
    |--------------------------------------------------------------------------
    | Accept Contract
    |--------------------------------------------------------------------------
    |
    | This method is used to accept contract
    |
    */

    /**
     * @param MessageContract $contract
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */


    public function acceptContract(MessageContract $contract, User $user)
    {
        $this->contract = $contract;
        $this->user = $user;
        DB::beginTransaction();


        $this->createContract();
        $contract->update([
            'status' => 'accepted',
        ]);
        $html = $this->sendAcceptedMessage();
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
        $new_contract = Contract::create([
            'title' => $contractData['project_title'],
            'start_date' => $contractData['contract_date'],
            'cost' => $contractData['project_cost'],
            'description' => $contractData['project_description'],
            'status' => 'pending',
            'user_id' => $this->contract->send_by,
            'client_id' => $this->contract->send_to,
            'job_id' => $contractData['job_id'] ?? null,
        ]);

        foreach ($milestones as $key => $m) {
            $new_contract->milestones()->create([
                'title' => $m['title'],
                'cost' => $m['amount'],
                'description' => $m['description'],
            ]);
        }

        $workspace =  $new_contract->workspaces()->create([
            'name' => $contractData['project_title'] . ' workspace',
            'slug' => Str::slug($contractData['project_title'] . ' workspace'),
            'user_id' => $this->contract->send_by,
            'client_id' => $this->contract->send_to,
        ]);

        $chat = $workspace->chat()->create([
            'name' => $contractData['project_title'] . ' chat',
            'uuid' => Str::uuid(),
            'status' => 'active',
        ]);

        $chat->participants()->createMany([
            [
                'user_id' => $this->contract->send_by,
                'role' => 'member',
            ],
            [
                'user_id' => $this->contract->send_to,
                'role' => 'owner',
            ],
        ]);
    }

    private function sendAcceptedMessage()
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


    /*
    |------------------------------------------------------------------
    |   Reject Contract
    |------------------------------------------------------------------
    */


    public function rejectContract(MessageContract $contract, User $user)
    {
        $chat = $contract->message->chat;
        $receiver = User::find($contract->send_by);

        DB::beginTransaction();
        $contract->update([
            'status' => 'rejected',
        ]);
        $message =  Message::create([
            'chat_id' => $chat->id,
            'sender_id' => $user->id,
            'message' => 'Contract Rejected',
            'replied_to' => $contract->message_id,
        ]);
        DB::commit();
        $message->load(['replied']);
        $for = 'reply';
        $html =  view('components.chat.message', compact('message', 'for'))->render();

        $for = 'sender';
        event(new MessageEvent(
            message: view('components.chat.message', compact('message', 'for'))->render(),
            from: auth()->user()->only(['uuid', 'name', 'email']),
            time: $message->created_at,
            media: [],
            chat: $chat->uuid,
            to: $receiver->uuid,
        ));

        return response()->json([
            'status' => 'success',
            'message' => 'Contract rejected successfully',
            'html' => $html,
        ]);
    }
}
