<?php

namespace App\Models;

use App\Traits\HasImages;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends BaseModel
{
    use Searchable, HasImages;
    protected $casts = [
        "specifications" => "array",
        "dimensions" => "array"
    ];

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, "product_categories");
    }

    public function price(): HasOne
    {
        return $this->hasOne(Price::class)->where('variant_id', '=', NULL);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function oems(): HasMany
    {
        return $this->hasMany(ProductOem::class, 'logicalref');
    }
}
