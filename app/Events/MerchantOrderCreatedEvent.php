<?php

namespace App\Events;

use App\Models\MerchantOrder;
use App\Notifications\MerchantOrderCreatedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class MerchantOrderCreatedEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public MerchantOrder $merchantOrder
    )
    {
        //
    }

    public function getNotification(): Notification
    {
        return new MerchantOrderCreatedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [];
    }
}
