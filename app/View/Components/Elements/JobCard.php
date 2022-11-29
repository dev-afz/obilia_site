<?php

namespace App\View\Components\Elements;

use App\Models\Job;
use Illuminate\View\Component;

class JobCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $job;
    public $showBtn;
    public function __construct(
        Job $job,
        $class = null,
        $showBtn = true
    ) {
        $this->job = $job;
        $this->class = $class;
        $this->showBtn = $showBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.job-card');
    }
}
