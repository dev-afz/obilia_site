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
    public $showAd;
    public $applyBtn;
    public function __construct(
        array|Job  $job,
        bool $showAd = true,
        bool $applyBtn = true
    ) {
        $this->job = $job;
        $this->showAd = $showAd;
        $this->applyBtn = $applyBtn;
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
