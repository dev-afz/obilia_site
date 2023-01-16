<?php

namespace App\View\Components\Utils;

use Illuminate\View\Component;

class Uploader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $label;
    public $id;
    public $accept;
    public $multiple;
    public $drop;
    public $paste;
    public $preview;
    public $maxFiles;
    public $maxFileSize;
    public $listeners;

    public function __construct(
        $name,
        string $label = null,
        string $id = null,
        array $accept = ['image/*', 'application/pdf'],
        bool $multiple = false,
        bool $drop = true,
        bool $paste = false,
        bool $preview = true,
        int $maxFiles = 1,
        string $maxFileSize = '1MB',
        array $listeners = [],
    ) {

        //convert boolean to string
        $this->name = $name;
        $this->label = $label;
        $this->id = $id;
        $this->accept = $accept;
        $this->multiple = $multiple ? 'true' : 'false';
        $this->drop = $drop ? 'true' : 'false';
        $this->paste = $paste ? 'true' : 'false';
        $this->preview = $preview ? 'true' : 'false';
        $this->maxFiles = $maxFiles;
        $this->maxFileSize = $maxFileSize;
        $this->listeners = $listeners;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utils.uploader');
    }
}
