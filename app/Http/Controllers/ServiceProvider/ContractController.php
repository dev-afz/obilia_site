<?php

namespace App\Http\Controllers\ServiceProvider;

use DB;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use App\Services\ServiceProvider\ContractActionService;

class ContractController extends Controller
{
    public function action(Request $request, ContractActionService $service)
    {
        $request->validate([
            'action' => 'required|string|in:accept,reject',
            'id' => 'required|exists:message_contracts,id',
        ]);
        $user = auth()->user();

        $contract = $user->received_message_contract()
            ->where('message_contracts.id', $request->id)
            ->firstOrFail();

        if ($contract->status !== 'pending') {
            throw ValidationException::withMessages([
                'status' => 'Contract already ' . $contract->status,
            ]);
        }

        if ($request->action === 'reject') {

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

        return $service->acceptContract($contract, auth()->user());
    }
}
