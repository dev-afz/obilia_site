<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Managers\FileManager;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use App\Services\ServiceProvider\ContractActionService;

class ContractController extends Controller
{
    use FileManager;

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
