<?php

namespace App\Listeners;

use App\Events\InvoiceAddressChangedEvent;

class InvoiceAddressChangedListener
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
    public function handle(InvoiceAddressChangedEvent $event): void
    {
        //
    }
}
