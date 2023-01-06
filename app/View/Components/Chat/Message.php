<?php

namespace App\View\Components\chat;

use Illuminate\View\Component;

class Message extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;
    public $for;
    public function __construct(
        $message,
        string $for = 'sender'
    ) {
        $this->message = $message;
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chat.message');
    }
}
