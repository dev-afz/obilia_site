<?php

namespace App\View\Components\Elements;

use App\Models\UserService as ModelsUserService;
use Illuminate\View\Component;

class UserService extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $service;

    public function __construct(
        ModelsUserService $service
    ) {
        $this->service = $service;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.user-service');
    }
}
