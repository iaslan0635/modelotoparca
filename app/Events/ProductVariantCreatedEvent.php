<?php

namespace App\Events;

use App\Models\Variant;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductVariantCreatedEvent
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public Variant $variant
    )
    {
        //
    }
}
