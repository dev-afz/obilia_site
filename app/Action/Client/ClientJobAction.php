<?php

namespace App\Action\Client;

use App\Managers\FileManager;
use App\Models\Job;
use App\Models\User;
use App\Models\JobSkill;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientJobAction
{
    use FileManager;

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
            'banner' => ($request->hasFile('banner')) ? $this->uploadFileToDO($request->banner, 'images/jobs', 'banner') : null,
            'status' => 'active',
        ]);
        $data = [];

        // Log::info(json_decode($request->skills, true));
        foreach (json_decode($request->skills, true) as $key => $value) {

            $data[] = [
                'job_id' => $job->id,
                'skill_id' => $value['id'] ?? null,
                'other_skill' => (!empty($value['id'])) ? null : $value['value'],
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
