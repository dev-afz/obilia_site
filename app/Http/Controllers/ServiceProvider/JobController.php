<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Models\Skill;
use App\Models\Industry;
use App\Models\WorkLength;
use Illuminate\Http\Request;
use App\Managers\FileManager;
use App\Models\ExperienceLevel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Action\Client\ClientJobAction;
use App\Action\ServiceProvider\JobAction;

class JobController extends Controller
{
    use FileManager;
    public function index()
    {

        return view('dashboard.service-provider.jobs');
    }


    public function apply(Request $request, JobAction $action)
    {
        $request->validate(
            [
                'id' => 'required|integer|exists:jobs,id',
                'work_letter' => 'required|string|max:2000',
                'additional_document' => 'nullable|file|max:2048',
                'price' => 'required|integer|min:1',
                'terms' => 'required'
            ],

            [
                'terms.required' => 'You must agree to the terms and conditions'
            ]
        );

        $action->apply($request);

        return response()->json([
            'status' => 'success',
            'message' => 'Proposal sent successfully',
        ]);
    }


    public function likedJobs()
    {
        return view('dashboard.service-provider.liked-jobs');
    }



    public function add()
    {

        $industries = Industry::active()->get()->toArray();
        $skills = Skill::active()->get()->toArray();
        $experience_levels = ExperienceLevel::active()->get()->toArray();
        $length = WorkLength::active()->get()->toArray();
        return view('dashboard.service-provider.add-job', compact('industries', 'skills', 'experience_levels', 'length'));
    }

    public function store(Request $request, ClientJobAction $action)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|integer|exists:industries,id',
            'sub_category' => 'required|integer|exists:categories,id',
            'tag' => 'required|integer|exists:sub_categories,id',
            'description' => 'required|string|max:500',
            'experience' => 'required|integer|exists:experience_levels,id',
            'skills' => 'required|json',
            'project_length' => 'required|integer|exists:work_lengths,id',
            'project_size' => 'required|in:small,medium,large',
            'budget_from' => 'required|integer',
            'budget_to' => 'required|integer|gte:budget_from',
            'responsibilities' => 'nullable|array',
            'visibility' => 'required|in:public,private',

        ]);


        $user = auth()->user();
        $action->jobStoreAction($request, $user);
        return response()->json([
            'message' => 'Job created successfully'
        ]);
    }


    public function postedJobs()
    {
        return view('dashboard.service-provider.posted-jobs');
    }


    public function show($slug)
    {
        $user = auth()->user();

        $job = $user->posted_jobs()->where('slug', $slug)
            ->with([
                'sub_category', 'experience', 'work_length', 'skills' => ['skill'], 'responsibilities',
            ])
            ->withCount(['applications'])
            ->firstOrFail();
        return view('dashboard.service-provider.job-details', compact('job'));
    }

    public function invitations()
    {
        $provider  = auth()->user();
        $invitations = $provider
            ->job_invitations()
            ->where('status', 'pending')
            ->with(['job' => ['client:id,name,uuid,images']])
            ->get();

        return view('dashboard.service-provider.invitations', compact('invitations'));
    }


    public function invitationAction(Request $request)
    {
        $request->validate([
            'invitation_id' => 'required|integer|exists:job_invitations,id',
            'action' => 'required|in:accepted,rejected',
            'bid_amount' => 'required_if:action,accepted|integer|min:1'
        ]);

        $provider = auth()->user();

        $invitation = $provider->job_invitations()->where('id', $request->invitation_id)->firstOrFail();

        if ($invitation->status !== 'pending') {
            return response()->json([
                'status' => 'error',
                'message' => 'Invitation already ' . $invitation->status
            ]);
        }
        DB::beginTransaction();
        $invitation->update([
            'status' => $request->action
        ]);

        if ($request->action === 'accepted') {
            $already_applied = $provider->job_applications()->where('job_id', $invitation->job_id)->exists();
            if (!$already_applied) {
                $provider->job_applications()->create([
                    'job_id' => $invitation->job_id,
                    'bid_price' => $request->bid_amount,
                    'status' => 'pending',
                    'work_letter' => 'Invitation accepted'
                ]);
            }
        }
        DB::commit();


        return response()->json([
            'status' => 'success',
            'message' => 'Invitation ' . $request->action . ' successfully'
        ]);
    }
}
