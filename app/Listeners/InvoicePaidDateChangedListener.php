<?php

namespace App\Listeners;

use App\Events\InvoicePaidDateChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
