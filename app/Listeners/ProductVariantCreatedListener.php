<?php

namespace App\Listeners;

use App\Events\ProductVariantCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductVariantCreatedListener
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
    public function handle(ProductVariantCreatedEvent $event): void
    {
        //
    }
}
