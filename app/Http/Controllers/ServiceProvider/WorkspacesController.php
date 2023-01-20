<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Models\Workspace;
use Illuminate\Http\Request;
use App\Managers\ColorManager;
use App\Http\Controllers\Controller;

class WorkspacesController extends Controller
{
    public function index(ColorManager $colorManager)
    {
        auth()->user();
        $workspaces = Workspace::where('user_id', auth()->id())
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
            ->with([
                'contract.milestones',
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
}
