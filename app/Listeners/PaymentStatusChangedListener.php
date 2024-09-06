<?php

namespace App\Listeners;

use App\Events\OrderStatusChangedEvent;

class PaymentStatusChangedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderStatusChangedEvent $event): void
    {
        //
    }
}
