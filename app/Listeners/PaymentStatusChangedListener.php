<?php

namespace App\Listeners;

use App\Events\PaymentStatusChangedEvent;

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
    public function handle(PaymentStatusChangedEvent $event): void
    {
        //
    }
}
