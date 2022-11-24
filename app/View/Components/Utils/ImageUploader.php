<?php

namespace App\View\Components\Utils;

use Illuminate\View\Component;

class ImageUploader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $id;
    public $name;
    public $label;
    public $required;
    public $disabled;
    public $class;
    public $multiple;
    public $attrs;
    public $accept;
    public $value;
    public $instructions;
    public $width;
    public $height;


    public function __construct(
        $name,
        $id = null,
        $label = null,
        $required = true,
        $disabled = false,
        $class = '',
        $multiple = false,
        array $attrs = null,
        $accept = 'image/*',
        $value = null,
        $instructions = null,
        $width = '150px',
        $height = '150px'
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->class = $class;
        $this->multiple = $multiple;
        $this->attrs = $attrs;
        $this->accept = $accept;
        $this->value = $value;
        $this->instructions = $instructions;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utils.image-uploader');
    }
}
