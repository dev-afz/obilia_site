<?php

namespace App\View\Components\Utils;

use Illuminate\View\Component;

class InputFile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $name;
    public $id;
    public $hasLabel;
    public $multiple;
    public $attrs;
    public $parentClass;
    public $required;
    public function __construct(
        string  $name,
        string $id = null,
        string $class = "",
        bool $hasLabel = true,
        bool  $multiple = false,
        array $attrs = [],
        string  $parentClass = "",
        bool $required = false
    ) {
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->hasLabel = $hasLabel;
        $this->multiple = $multiple;
        $this->attrs = $attrs;
        $this->parentClass = $parentClass;
        $this->required = $required;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utils.input-file');
    }
}
