<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class SubMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $subMenu;
    public function __construct(
        $subMenu
    ) {
        $this->subMenu = $subMenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.sub-menu');
    }
}
