<?php

namespace App\View\Components\Section;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categories;
    public function __construct(
        array|Collection   $categories
    ) {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.category');
    }
}
