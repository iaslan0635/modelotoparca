<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaxChangedEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    public function getNotification(): \Illuminate\Notifications\Notification {
        return new \App\Notifications\TaxChangedNotification($this);
    }

    public function getNotificationAudience(): \Illuminate\Support\Collection|array {
        return [];
    }

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }
}
