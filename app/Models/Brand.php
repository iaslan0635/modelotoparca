<?php

namespace App\Models;

use App\Enums\BrandType;
use App\Traits\HasImages;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends BaseModel
{
    use Searchable, HasImages;

    protected $guarded = [];

    protected $casts = [
        'type' => BrandType::class,
        'data' => 'array',
    ];

    protected $searchableAs = 'brands_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return $this->only([
            'id',
            'name',
            'slug',
        ]);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
