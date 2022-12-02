<?php

namespace App\View\Components\Misc;

use Illuminate\View\Component;

class JobSkeletonLoader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $class;
    public $count;
    public function __construct(
        $class = null,
        $count = 6
    ) {
        $this->class = $class;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.misc.job-skeleton-loader');
    }
}
