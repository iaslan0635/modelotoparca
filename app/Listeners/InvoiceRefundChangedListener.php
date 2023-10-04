<?php

namespace App\Listeners;

use App\Events\InvoiceRefundChangedEvent;

class InvoiceRefundChangedListener
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
    public function handle(InvoiceRefundChangedEvent $event): void
    {
        //
    }
}
