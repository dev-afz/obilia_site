<?php

namespace App\View\Components\Utils;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $id;
    public $name;
    public $type;
    public $value;
    public $label;
    public $placeholder;
    public $required;
    public $disabled;
    public $class;
    public $icon;
    public $attrs;
    public $multiple;
    public $labelClass;

    public function __construct(
        $name,
        $id = null,
        $type = 'text',
        $value = null,
        $label = null,
        $placeholder = null,
        $required = true,
        $disabled = false,
        $class = '',
        $icon = false,
        array $attrs = null,
        bool $multiple = false,
        string $labelClass = ''
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->class = $class;
        $this->icon = $icon;
        $this->attrs = $attrs;
        $this->multiple = $multiple;
        $this->labelClass = $labelClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utils.input');
    }
}
