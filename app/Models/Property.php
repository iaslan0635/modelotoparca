<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends BaseModel
{
    public function values(): HasMany
    {
        return $this->hasMany(PropertyValue::class);
    }
}
