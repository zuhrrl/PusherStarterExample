<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ShowNotification implements ShouldBroadcastNow
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $messages;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->messages = $value;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }

    public function broadcastOn()
    {
        return ['channelNotifikasi'];
    }

    public function broadcastAs()
    {
        return 'terimaNotifikasi';
    }
}
