<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspacesController extends Controller
{
    public function index()
    {
        $workspaces = Workspace::where('client_id', auth()->id())
            ->active()
            ->get();

        return view('dashboard.client.workspace.workspaces', compact('workspaces'));
    }
}
