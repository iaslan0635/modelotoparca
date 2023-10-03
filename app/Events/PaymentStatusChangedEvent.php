<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaymentStatusChangedEvent
{
    use Dispatchable, SerializesModels;

    public const NOTIFICATION = \App\Notifications\PaymentStatusChangedNotification::class;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }
}
