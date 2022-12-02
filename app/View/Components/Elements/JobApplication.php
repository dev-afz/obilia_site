<?php

namespace App\View\Components\Elements;

use Illuminate\View\Component;

class JobApplication extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $applications;
    public function __construct($applications)
    {
        $this->applications = $applications;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.job-application');
    }
}
