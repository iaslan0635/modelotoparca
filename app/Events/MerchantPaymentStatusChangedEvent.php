<?php

namespace App\Events;

use App\Models\MerchantOrder;
use App\Notifications\OrderStatusChangedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class MerchantPaymentStatusChangedEvent implements Notifable
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public MerchantOrder $order
    ) {
        //
    }

    public function getNotification(): Notification
    {
        return new OrderStatusChangedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [$this->order->user];
    }
}
