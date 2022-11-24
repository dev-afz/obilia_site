<?php

namespace App\Action\Client;


use App\Models\Job;
use App\Models\User;
use App\Models\JobSkill;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientJobAction
{

    public function jobStoreAction(Request $request, User $user): void
    {
        DB::beginTransaction();
        $job = Job::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'payment_type' => $request->payment_type,
            'work_hours' => $request->total_hours,
            'size' => $request->project_size,
            'country' => 'india',
            'rate_from' => $request->budget_from,
            'rate_to' => $request->budget_to,
            'experience_level_id' => $request->experience,
            'sub_category_id' => $request->category,
            'work_length_id' => $request->project_length,
            'size' => $request->project_size,
            'user_id' => $user->id,
        ]);
        $data = [];

        Log::info($job);
        foreach ($request->skills as $key => $value) {
            $data[] = [
                'job_id' => $job->id,
                'skill_id' => $value,
                'other_skill' => null,
                'created_at' => now(),
            ];
        }
        JobSkill::insert($data);
        DB::commit();
    }





    public function makeMetadata(Job $job)
    {
    }
}
