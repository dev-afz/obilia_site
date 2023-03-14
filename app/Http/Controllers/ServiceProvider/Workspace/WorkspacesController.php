<?php

namespace App\Http\Controllers\ServiceProvider\Workspace;

use App\Models\Workspace;
use Illuminate\Http\Request;
use App\Managers\FileManager;
use App\Models\MilestoneWork;
use App\Managers\ColorManager;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WorkspacesController extends Controller
{
    use FileManager;
    public function index(ColorManager $colorManager)
    {
        $workspaces = Workspace::where('user_id', auth()->id())
            ->orWhere('client_id', auth()->id())
            ->active()
            ->get();


        $workspaces->map(function ($workspace, $key) use ($colorManager) {
            $workspace->color1 = $colorManager->light($key);
            $workspace->color2 = $colorManager->dark($key);
            return $workspace;
        });



        return view('dashboard.service-provider.workspace.workspaces', compact('workspaces'));
    }


    public function show($slug)
    {


        //set session for workspace
        session(['active_workspace' => $slug]);
        $workspace = Workspace::where('slug', $slug)
            ->where('user_id', auth()->id())
            ->orWhere('client_id', auth()->id())
            ->with([
                'contract' => ['milestones.works', 'milestone_requests' => function ($query) {
                    $query->where('status', '!=', 'approved');
                }],
                'owner',
                'provider',
            ])
            ->active()
            ->firstOrFail();
        return view('dashboard.service-provider.workspace.workspace-details', compact('workspace'));
    }

    public function paymentAndInvoices($slug)
    {
        $workspace = Workspace::where('slug', $slug)
            ->where('user_id', auth()->id())
            ->active()
            ->firstOrFail();
        return view('dashboard.service-provider.workspace.payment-and-invoices', compact('workspace'));
    }


    public function projectInfo($slug)
    {
        $workspace = Workspace::where('slug', $slug)
            ->where('user_id', auth()->id())
            ->with([
                'contract.milestones',
            ])
            ->active()
            ->firstOrFail();
        return view('dashboard.service-provider.workspace.project-info', compact('workspace'));
    }



    public function getWorks(Request $request)
    {
        $request->validate([
            'milestone_id' => 'required|integer',
        ]);

        $provider = auth()->user();

        $milestone = $provider->provider_milestones()
            ->where('contract_milestones.id', $request->milestone_id)
            ->firstOrFail();

        $works = $milestone->works;

        $html = view('components.helper.works', compact('works'))->render();

        return response()->json([
            'works' => $works,
            'html' => $html,
        ]);
    }


    public function addWork(Request $request)
    {
        $request->validate([
            'milestone_id' => 'required|integer',
            'file' => 'required_without:remarks|file|mimes:zip,rar,7z,doc,docx,pdf,txt,xls,xlsx,ppt,pptx,mp4,mp3,jpg,jpeg,png,gif|max:102400',
            'remarks' => 'required_without:file|string|max:5000',
        ]);

        $provider = auth()->user();

        $milestone = $provider->provider_milestones()
            ->where('contract_milestones.id', $request->milestone_id)
            ->firstOrFail();



        $milestone->works()->create([
            'file' => ($request->file) ? $this->uploadFileToDO($request->file, 'milestones/works') : null,
            'remark' => $request->remarks,
        ]);

        return response()->json([
            'message' => 'Work added successfully',
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

        $provider = auth()->user();

        $contract = $provider->provider_contracts()->where('id', $request->contract_id)->firstOrFail();

        $contract->milestone_requests()->create([
            'contract_id' => $contract->id,
            'milestone' => json_encode($request->only(['title', 'description', 'amount', 'due_date']), true),
            'requested_by' => $provider->id,
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

        $provider = auth()->user();

        $contract = $provider->provider_contracts()->whereHas('milestone_requests', function ($query) use ($request, $provider) {
            $query->where('id', $request->request_id)
                ->where('requested_by', '!=', $provider->id);
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
