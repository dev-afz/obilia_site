<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

class Plan extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $packages;
    public function __construct(
        $packages
    ) {
        $this->packages = $packages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.plan');
    }
}
