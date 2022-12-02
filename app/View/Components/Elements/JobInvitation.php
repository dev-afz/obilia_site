<?php

namespace App\View\Components\Elements;

use Illuminate\View\Component;

class JobInvitation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $invitations;
    public function __construct(
        $invitations
    ) {
        $this->invitations = $invitations;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.job-invitation');
    }
}
