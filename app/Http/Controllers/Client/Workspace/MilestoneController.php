<?php

namespace App\Http\Controllers\Client\Workspace;


use Illuminate\Http\Request;
use App\Models\MilestoneWork;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\ServiceProvider\WorkService;

class MilestoneController extends Controller
{
    public function viewWork(Request $request)
    {
        $request->validate([
            'milestone_id' => 'required|integer',
        ]);

        $client = auth()->user();

        $milestone = $client->client_milestones()->where('contract_milestones.id', $request->milestone_id)->firstOrFail();

        $works = $milestone->works()->get();
        $controls = true;
        $html = view('components.helper.works', compact('works', 'controls'))->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }


    public function workAction(Request $request)
    {
        $request->validate([
            'work' => 'required|integer',
            'action' => 'required|string|in:approved,rejected',
        ]);

        $client = auth()->user();

        $service = new WorkService(
            work_id: $request->work,
            client: $client,
        );

        $res = $service->resolve($request->action);

        return response()->json([
            'status' => 'success',
            'message' => 'Work ' . $res,
        ]);
    }


    public function requestMilestone(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'due_date' => 'required|date|after:today',
            'contract_id' => 'required|integer',
        ]);

        $client = auth()->user();

        $contract = $client->client_contracts()->where('id', $request->contract_id)->firstOrFail();

        $contract->milestone_requests()->create([
            'contract_id' => $contract->id,
            'milestone' => json_encode($request->only(['title', 'description', 'amount', 'due_date']), true),
            'requested_by' => $client->id,
            'status' => 'pending',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Milestone request sent successfully',
        ]);
    }

    public function actionRequest(Request $request)
    {
        $request->validate([
            'request_id' => 'required|integer',
            'action' => 'required|string|in:approved,rejected',
        ]);

        $client = auth()->user();

        $contract = $client->client_contracts()->whereHas('milestone_requests', function ($query) use ($request, $client) {
            $query->where('id', $request->request_id)
                ->where('requested_by', '!=', $client->id);
        })->firstOrFail();

        $ml_request = $contract->milestone_requests()->where('id', $request->request_id)->firstOrFail();

        if ($ml_request->status !== 'pending') {
            return response()->json([
                'status' => 'error',
                'message' => 'Request already ' . $ml_request->status,
            ]);
        }
        DB::beginTransaction();

        if ($request->action === 'approved') {
            $ml_request->update([
                'status' => 'approved',
            ]);

            $contract->milestones()->create([
                'title' => json_decode($ml_request->milestone, true)['title'],
                'description' => json_decode($ml_request->milestone, true)['description'],
                'cost' => json_decode($ml_request->milestone, true)['amount'],
                'due_date' => json_decode($ml_request->milestone, true)['due_date'],
                'status' => 'pending',
            ]);
        } else {
            $ml_request->update([
                'status' => 'rejected',
            ]);
        }

        DB::commit();

        return response()->json([
            'status' => 'success',
            'message' => 'Request ' . $request->action . 'ed successfully',
        ]);
    }
}
