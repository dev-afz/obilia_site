<?php

namespace App\Http\Controllers\Client\Workspace;

use Colors\RandomColor;
use App\Models\Workspace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Managers\ColorManager;

class WorkspacesController extends Controller
{
    public function index(ColorManager $colorManager)
    {
        auth()->user();
        $workspaces = Workspace::where('client_id', auth()->id())
            ->active()
            ->get();


        $workspaces->map(function ($workspace, $key) use ($colorManager) {
            $workspace->color1 = $colorManager->light($key);
            $workspace->color2 = $colorManager->dark($key);
            return $workspace;
        });



        return view('dashboard.client.workspace.workspaces', compact('workspaces'));
    }


    public function show($slug)
    {


        //set session for workspace
        session(['active_workspace' => $slug]);
        $workspace = Workspace::where('slug', $slug)
            ->where('client_id', auth()->id())
            ->with([
                'contract' => ['milestones.works', 'milestone_requests' => function ($query) {
                    $query->where('status', '!=', 'approved');
                }],
                'provider',
            ])
            ->active()
            ->firstOrFail();
        return view('dashboard.client.workspace.workspace-details', compact('workspace'));
    }

    public function paymentAndInvoices($slug)
    {
        $workspace = Workspace::where('slug', $slug)
            ->where('client_id', auth()->id())
            ->active()
            ->firstOrFail();
        return view('dashboard.client.workspace.payment-and-invoices', compact('workspace'));
    }


    public function projectInfo($slug)
    {
        $workspace = Workspace::where('slug', $slug)
            ->where('client_id', auth()->id())
            ->with([
                'contract.milestones',
            ])
            ->active()
            ->firstOrFail();
        return view('dashboard.client.workspace.project-info', compact('workspace'));
    }
}
