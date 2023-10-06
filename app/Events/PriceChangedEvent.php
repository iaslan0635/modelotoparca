<?php

namespace App\Events;

use App\Models\Price;
use App\Notifications\PriceChangedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class PriceChangedEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public Price $price
    ) {
        //
    }

    public function getNotification(): Notification
    {
        return new PriceChangedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [];
    }
}
