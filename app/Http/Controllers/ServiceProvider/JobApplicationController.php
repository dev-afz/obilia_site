<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class JobApplicationController extends Controller
{
    public function suggestedCandidates(Request $request)
    {

        $request->validate([
            'job_id' => 'required|exists:jobs,id',
        ]);
        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }



        $user = auth()->user();


        $job = $user->posted_jobs()->where('id', $request->job_id)->firstOrFail()
            ->load(['skills', 'applications', 'invites']);

        $already_applied = $job->applications->pluck('user_id')->toArray();
        $already_invited = $job->invites->pluck('user_id')->toArray();

        $skill_ids = $job->skills->pluck('id')->toArray();




        $suggestedCandidates = User::whereNotIn('id', $already_applied)
            ->whereNotIn('id', $already_invited)
            ->where('id', '!=', $user->id)
            ->where(function ($q) use ($skill_ids, $job) {
                $q->whereHas('skills', function ($query) use ($skill_ids, $job) {
                    $query->whereIn('skill_id', $skill_ids);
                })->orWhereHas('services', function ($query) use ($skill_ids, $job) {
                    $query->where('sub_category_id', $job->sub_category_id)
                        ->when($job->metadata, function ($query) use ($job) {
                            $meta = explode(',', $job->metadata);
                            foreach ($meta as $m) {
                                $query->orWhere('metadata', 'like', '%' . $m . '%');
                            }
                        });
                });
            })
            ->with(['services' => function ($query) use ($job) {
                $query->where('sub_category_id', $job->sub_category_id)
                    ->when($job->metadata, function ($query) use ($job) {
                        $meta = explode(',', $job->metadata);
                        foreach ($meta as $m) {
                            $query->orWhere('metadata', 'like', '%' . $m . '%');
                        }
                    })
                    ->latest()->limit(1);
            }])
            ->isUser()->active()->get();
        $html = view('components.elements.service-provider-card', [
            'users' => $suggestedCandidates,
            'showInvite' => true,
            'class' => 'col-md-4 mt-5'
        ])->render();

        return response()->json([
            'status' => 'success',
            'html' => $html
        ]);
    }


    public function applications(Request $request)
    {
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
        ]);
        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }


        $user = auth()->user();

        $applications = $user->posted_jobs()->where('id', $request->job_id)->firstOrFail()
            ->applications()
            ->where('status', '!=', 'accepted')
            ->with(['user:id,name,email,images'])->get();

        $html = view('components.elements.job-application', [
            'applications' => $applications,
            'class' => 'col-md-4 mt-5'
        ])->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }

    public function applicationAction(Request $request)
    {

        $request->validate([
            'id' => 'required|exists:job_applications,id',
            'status' => 'required|in:accepted,rejected',
        ]);

        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }

        $user = auth()->user();

        $application = JobApplication::where('id', $request->id)
            ->with(['job:id,user_id,title'])
            ->firstOrFail();

        if ($application->job->user_id != $user->id) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }

        DB::beginTransaction();
        $application->update([
            'status' => $request->status
        ]);

        $chat =   Chat::create([
            'job_id' => $application->job_id,
            'name' => $application->job->title . ' - ' . $application->user->name,
            'uuid' => Str::uuid(),
        ]);

        $chat->participants()->createMany([
            [
                'user_id' => $application->user_id,
                'role' => 'member',
            ],
            [
                'user_id' => $user->id,
                'role' => 'owner',
            ]
        ]);

        DB::commit();



        return response()->json([
            'status' => 'success',
            'message' => 'Application ' . $request->status . ' successfully'
        ]);
    }



    public function inviteCandidate(Request $request)
    {
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
            'user_id' => 'required|exists:users,id',
        ]);
        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }

        $user = auth()->user();

        $job = $user->posted_jobs()->where('id', $request->job_id)->firstOrFail();

        $job->invites()->where('user_id', $request->user_id)->firstOrCreate([
            'user_id' => $request->user_id,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'User invited successfully'
        ]);
    }


    public function invitedCandidates(Request $request)
    {
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
        ]);

        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }

        $user = auth()->user();

        $invites = $user->posted_jobs()->where('id', $request->job_id)->firstOrFail()
            ->invites()->with(['user:id,name,email,images'])->get();


        $html = view('components.elements.job-invitation', [
            'invitations' => $invites,
            'class' => 'col-md-4 mt-5'
        ])->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }

    public function hiredCandidates(Request $request)
    {
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
        ]);

        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request'
            ], 400);
        }

        $user = auth()->user();

        $hired = $user->posted_jobs()->where('id', $request->job_id)->firstOrFail()
            ->hired_candidates()->with(['user:id,name,email,images'])->get();


        $html = view('components.elements.job-application', [
            'applications' => $hired,
            'class' => 'col-md-4 mt-5',
        ])->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
