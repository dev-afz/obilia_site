<?php

namespace App\View\Components\Utils;

use Illuminate\View\Component;

class Repeater extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $fields;
    public $maxLimit;
    public $minLimit;
    public function __construct(
        $name,
        $fields = "",
        $maxLimit = 0,
        $minLimit = 1
    ) {
        $this->name = $name;
        $this->fields = $fields;
        $this->maxLimit = $maxLimit;
        $this->minLimit = $minLimit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utils.repeater');
    }
}
