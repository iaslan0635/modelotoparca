<?php

namespace App\Listeners;

use App\Events\InvoiceStatusChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
