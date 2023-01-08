<?php

namespace App\View\Components\elements;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $class;
    public $id;
    public $title;
    public $footer;
    public function __construct(
        string $id,
        string $class = "",
        string $title = "Modal",
        bool $footer = true,
    ) {
        $this->class = $class;
        $this->id = $id;
        $this->title = $title;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.modal');
    }
}
