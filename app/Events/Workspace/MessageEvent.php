<?php

namespace App\Events\Workspace;

use App\Models\Workspace;
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
    public $to;
    public $from;
    public $workspace;
    public $chat;

    public function __construct(
        string $chat,
        int $to,
        array $from,
        $workspace,
        string $message = null,
    ) {
        $this->message = $message;
        $this->from = $from;
        $this->workspace = $workspace;
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

        return new PrivateChannel('workspace-message.' . $this->to);
    }

    public function broadcastAs()
    {
        return 'message';
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'from' => $this->from,
            'workspace' => $this->workspace,
            'chat' => $this->chat,
        ];
    }
}
