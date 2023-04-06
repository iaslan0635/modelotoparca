<?php

namespace App\Models;

use App\Traits\HasImages;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends BaseModel implements CanVisit
{
    use Searchable, HasImages, HasVisits;

    protected $casts = [
        "specifications" => "array",
        "dimensions" => "array"
    ];

    protected $searchableAs = "products_index";

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'part_number' => $this->part_number,
            'producercode' => $this->producercode,
            'cross_code' => $this->cross_code,
            'producercode2' => $this->producercode2,
            'similar_product_codes' => $this->similar_product_codes,
        ];
    }

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

    public function crosses(): HasMany
    {
        return $this->hasMany(Product::class, "cross_code", "cross_code");
    }

    public function alternatives(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "alternatives", "product_id", "alternative_id");
    }

    public function fullTitle(): Attribute
    {
        return Attribute::get(fn () => $this->title . ($this->part_number ? " @".$this->part_number:""));
    }
}
