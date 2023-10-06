<?php

namespace App\Events;

use App\Models\PropertyValue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductPropertyChangedEvent
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public PropertyValue $propertyValue
    ) {
        //
    }
}
