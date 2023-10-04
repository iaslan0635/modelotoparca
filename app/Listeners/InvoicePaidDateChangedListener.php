<?php

namespace App\Listeners;

use App\Events\InvoicePaidDateChangedEvent;

class InvoicePaidDateChangedListener
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
    public function handle(InvoicePaidDateChangedEvent $event): void
    {
        //
    }
}
