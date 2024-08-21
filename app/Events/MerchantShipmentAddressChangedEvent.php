<?php

namespace App\Events;

use App\Models\MerchantOrder;
use App\Notifications\ShipmentAddressChangedNotification;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class MerchantShipmentAddressChangedEvent implements Notifable
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
        return new ShipmentAddressChangedNotification($this);
    }

    public function getNotificationAudience(): Collection|array
    {
        return [];
    }
}
