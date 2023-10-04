<?php

namespace App\Listeners;

use App\Events\InvoiceStatusChangedEvent;

class InvoiceStatusChangedListener
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
    public function handle(InvoiceStatusChangedEvent $event): void
    {
        //
    }
}
