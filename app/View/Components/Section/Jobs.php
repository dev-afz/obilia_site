<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

class Jobs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $jobs;
    public function __construct(
        $jobs
    ) {
        $this->jobs = $jobs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.jobs');
    }
}
