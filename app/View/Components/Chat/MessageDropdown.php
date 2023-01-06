<?php

namespace App\View\Components\chat;

use Illuminate\View\Component;

class MessageDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $message;
    public $canDelete;

    public function __construct(
        $message,
        bool $canDelete
    ) {
        $this->message = $message;
        $this->canDelete = $canDelete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chat.message-dropdown');
    }
}
