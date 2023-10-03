<?php

namespace App\Listeners;

use App\Events\MerchantOrderCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MerchantOrderCreatedListener
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
    public function handle(MerchantOrderCreatedEvent $event): void
    {
        //
    }
}
