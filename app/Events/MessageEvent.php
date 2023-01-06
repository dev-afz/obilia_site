<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public $message;
    public $time;
    public $to;
    public $media;
    public $chat;

    public function __construct(
        $time,
        $chat,
        $to,
        $message = null,
        $media = null,
    ) {
        $this->message = $message;
        $this->time = $time;
        $this->media = $media;
        $this->chat = $chat;
        $this->to = $to;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat.' . $this->to);
    }

    public function broadcastAs()
    {
        return 'message';
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'from' => auth()->user()->only(['uuid', 'name', 'email']),
            'time' => $this->time,
            'media' => $this->media,
            'chat' => $this->chat
        ];
    }
}
