<?php

namespace App\Listeners;

use App\Events\ProductPropertyChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductPropertyChangedListener
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
    public function handle(ProductPropertyChangedEvent $event): void
    {
        //
    }
}
