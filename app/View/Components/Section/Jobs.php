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
    public $class;
    public function __construct(
        $jobs,
        $class = null,
    ) {
        $this->jobs = $jobs;
        $this->class = $class;
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
