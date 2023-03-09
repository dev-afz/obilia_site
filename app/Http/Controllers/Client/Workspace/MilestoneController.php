<?php

namespace App\Http\Controllers\Client\Workspace;


use App\Http\Controllers\Controller;
use App\Models\MilestoneWork;
use Illuminate\Http\Request;

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

        $work = MilestoneWork::where('id', $request->work)
            ->whereHas('milestone', function ($query) use ($client) {
                $query->whereHas('contract', function ($query) use ($client) {
                    $query->where('client_id', $client->id);
                });
            })
            ->firstOrFail();

        $work->status = $request->action;
        $work->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Action performed successfully',
        ]);
    }
}
