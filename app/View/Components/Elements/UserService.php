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
    public $showLikeButton;
    public $class;

    public function __construct(
        ModelsUserService $service,
        bool $showLikeButton = true,
        string $class = 'col-md-6 col-lg-4 mb-3',
    ) {
        $this->service = $service;
        $this->showLikeButton = $showLikeButton;
        $this->class = $class;
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
