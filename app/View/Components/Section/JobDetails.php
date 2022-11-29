<?php

namespace App\View\Components\Section;

use App\Models\Job;
use Illuminate\View\Component;

class JobDetails extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $job;
    public function __construct(
        array|Job  $job
    ) {
        $this->job = $job;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.job-details');
    }
}
