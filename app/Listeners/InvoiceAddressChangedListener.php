<?php

namespace App\Listeners;

use App\Events\InvoiceAddressChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
