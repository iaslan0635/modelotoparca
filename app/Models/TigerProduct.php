<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TigerProduct extends BaseModel
{
    public function getForeignKey()
    {
        return 'product_id';
    }

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'product_cars', 'logicalref', 'car_id');
    }

    public function oems(): HasMany
    {
        return $this->hasMany(ProductOem::class, 'logicalref');
    }

    public function similars(): HasMany
    {
        return $this->hasMany(ProductSimilar::class);
    }

    public function actualProduct()
    {
        return $this->hasOne(Product::class, 'id', 'id');
    }
}
