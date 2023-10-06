<?php

namespace App\Models;

use App\Enums\BrandType;
use App\Traits\HasImages;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends BaseModel
{
    use Searchable;
    use HasImages {
        imageUrl as protected databaseImageUrl;
    }

    protected $guarded = [];

    protected $dispatchesEvents = [
        'updated' => Brand::class,
    ];

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

    // We didn't use the HasImage trait because images are stored according to brand name
    public function imageUrl()
    {
        return file_exists(public_path("images/brands/$this->name.png"))
            ? asset("images/brands/$this->name.png")
            : $this->databaseImageUrl();
    }
}
