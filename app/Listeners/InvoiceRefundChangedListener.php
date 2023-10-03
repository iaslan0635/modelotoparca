<?php

namespace App\Listeners;

use App\Events\InvoiceRefundChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
