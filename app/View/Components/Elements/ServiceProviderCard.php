<?php

namespace App\View\Components\Elements;

use Illuminate\View\Component;

class ServiceProviderCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $users;

    public $showInvite;

    public function __construct(
        $users,
        $showInvite = true
    ) {
        $this->users = $users;
        $this->showInvite = $showInvite;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.service-provider-card');
    }
}
