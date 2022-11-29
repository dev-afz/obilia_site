<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    public function show($slug)
    {

        $job = Job::where('slug', $slug)
            ->with([
                'sub_category', 'experience', 'work_length', 'skills' => ['skill'], 'responsibilities',
                'application' => fn ($q) => $q->where('user_id', auth()->id())
            ])
            ->withCount(['applications'])
            ->firstOrFail();

        return view('job-details', compact('job'));
    }

    public function toggleLike(Request $request)
    {
        Log::info($request->all());
        $request->validate([
            'job' => 'required|string',
            'liked' => 'required|in:true,false',
        ]);
        $job = Job::where('slug', $request->job)->firstOrFail();
        $user = auth()->user();

        $liked = $user->liked_jobs()->where('likeable_id', $job->id)->exists();

        ($liked) ? $user->unlikeJob($job->id) : $user->likeJob($job->id);

        return response()->json([
            'status' => 'success',
            'message' => $liked ? 'Job unliked' : 'Job liked',
        ]);
    }
}
