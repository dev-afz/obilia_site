<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AddMetadataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $the_job;
    public function __construct(Job $the_job)
    {
        $this->the_job = $the_job;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $job = $this->the_job->load([
            'skills.skill',
            'sub_category',
            'category',
            'responsibilities',
            'work_length',
            'experience',
            'category'
        ]);
        $skills = $job->skills->map(function ($skill) {
            return $skill->skill->name ?? $skill->other_skill;
        })->toArray();

        $data = [
            ...$skills,
            $job->sub_category->name,
            $job->category->name,
            $job->work_length->name,
            $job->experience->name,
            $job->title,
        ];

        $metadata = implode(',', $data);

        $job->update([
            'metadata' => $metadata
        ]);
        Log::info('===============================================================================================');
        Log::info('Metadata added for job id: ' . $job->id);
        Log::info($metadata);
        Log::info('===============================================================================================');
    }
}
