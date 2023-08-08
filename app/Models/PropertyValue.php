<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class PropertyValue extends BaseModel
{
    protected $with = ['property'];

    public function property(): HasOne
    {
        return $this->hasOne(Property::class, 'id', 'property_id');
    }
}
