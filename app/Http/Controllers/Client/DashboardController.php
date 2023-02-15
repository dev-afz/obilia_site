<?php

namespace App\Http\Controllers\Client;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $jobs = auth()->user()->posted_jobs()->get('id');
        $total_jobs = $jobs->count();
        $total_active_jobs = auth()->user()->posted_jobs()->where('status', 'active')->count();
        $total_pending_jobs = auth()->user()->posted_jobs()->where('status', 'pending')->count();
        $total_completed_jobs = auth()->user()->posted_jobs()->where('status', 'completed')->count();
        $total_cancelled_jobs = auth()->user()->posted_jobs()->where('status', 'cancelled')->count();

        // $total_applications = a?


        return view('dashboard.client.index', compact('total_jobs', 'total_active_jobs', 'total_pending_jobs', 'total_completed_jobs', 'total_cancelled_jobs'));
    }

    public function subcategories(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }

        $request->validate([
            'category' => 'required|exists:categories,id'
        ]);

        $subcategories = SubCategory::where('category_id', $request->category)->get(['id', 'name']);

        return response()->json($subcategories);
    }
}
