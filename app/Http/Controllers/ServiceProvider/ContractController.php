<?php

namespace App\Http\Controllers\ServiceProvider;


use App\Models\Message;
use App\Events\MessageEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MessageContract;
use Illuminate\Validation\ValidationException;
use App\Services\ServiceProvider\ContractActionService;

class ContractController extends Controller
{


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
            'milestones.*.due_date' => 'required|date|after:contract_date',
            'contract_file' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
        ]);

        $user = auth()->user();

        $chat = $user
            ->chats()
            ->where('chats.uuid', $request->chat_id)
            ->active()
            ->firstOrFail();

        if ($chat->status != 'active') {
            throw ValidationException::withMessages([
                'chat_id' => 'Chat is not active',
            ]);
        }




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


    public function view(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $provider = auth()->user();
        $contract = MessageContract::where('id', $request->id)
            ->orWhere(function ($query) use ($request, $provider) {
                $query->where('send_by', $provider->id)
                    ->where('send_to', $request->id);
            })->firstOrFail();

        $html  =  view('components.chat.contract', compact('contract'))->render();

        return response()->json([
            'html' => $html,
        ]);
    }


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
            return $service->rejectContract($contract, auth()->user());
        }

        return $service->acceptContract($contract, auth()->user());
    }
}
