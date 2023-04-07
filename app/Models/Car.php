<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends BaseModel
{
    use Searchable;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "product_cars", "car_id", "logicalref");
    }
}
