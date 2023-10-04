<?php

namespace App\Events;

use App\Notifications\OrderCreatedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class OrderCreatedEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    public function getNotification(): Notification
    {
        return new OrderCreatedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [];
    }
}
