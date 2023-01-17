<?php

namespace App\Http\Controllers\Client;

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


    public function show()
    {
        return view('dashboard.client.workspace.workspace-details');
    }
}
