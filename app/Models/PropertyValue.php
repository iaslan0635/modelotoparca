<?php

namespace App\Models;

use App\Events\ProductPropertyChangedEvent;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PropertyValue extends BaseModel
{
    protected $with = ['property'];

    protected $dispatchesEvents = [
        'updated' => ProductPropertyChangedEvent::class,
    ];

    public function property(): HasOne
    {
        return $this->hasOne(Property::class, 'id', 'property_id');
    }
}
