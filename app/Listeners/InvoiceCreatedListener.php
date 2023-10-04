<?php

namespace App\Listeners;

use App\Events\InvoiceCreatedEvent;

class InvoiceCreatedListener
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
    public function handle(InvoiceCreatedEvent $event): void
    {
        //
    }
}
