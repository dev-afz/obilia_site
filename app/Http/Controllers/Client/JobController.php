<?php

namespace App\Http\Controllers\Client;

use App\Action\Client\ClientJobAction;
use App\Models\Skill;
use App\Models\Category;
use App\Models\WorkLength;
use Illuminate\Http\Request;
use App\Models\ExperienceLevel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    public function index()
    {

        // $user = auth()->user();

        // return $jobs =  $user->posted_jobs()->withCount(['applications'])->paginate(10);

        return view('dashboard.client.jobs');
    }


    public function add()
    {
        $categories = Category::active()->get()->toArray();
        $skills = Skill::active()->get()->toArray();
        $experience_levels = ExperienceLevel::active()->get()->toArray();
        $length = WorkLength::active()->get()->toArray();
        return view('dashboard.client.add-job', compact('categories', 'skills', 'experience_levels', 'length'));
    }


    public function store(Request $request, ClientJobAction $action)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|integer|exists:sub_categories,id',
            'description' => 'required|string|max:500',
            'experience' => 'required|integer|exists:experience_levels,id',
            'skills' => 'required|array',
            'skills.*' => 'required|integer|exists:skills,id',
            'project_length' => 'required|integer|exists:work_lengths,id',
            'project_size' => 'required|in:small,medium,large',
            'payment_type' => 'required|in:fixed,hourly',
            'budget_from' => 'required|integer',
            'budget_to' => 'required|integer|gte:budget_from',
            'total_hours' => 'required|integer',

        ]);
        $user = auth()->user();
        $action->jobStoreAction($request, $user);

        return response()->json([
            'message' => 'Job created successfully'
        ]);
    }
}
