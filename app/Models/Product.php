<?php

namespace App\Models;

use App\Facades\Garage;
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
        'specifications' => 'array',
        'dimensions' => 'array',
    ];

    protected $searchableAs = 'products_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return $this->only([
            'id',
            'title',
            'slug',
            'part_number',
            'producercode',
            'cross_code',
            'producercode2',
//            'similar_product_codes',
        ]) + [
            'oems' => $this->oems->map->toSearchableArray(),
            'cars' => $this->cars->map->toSearchableArray(),
            'categories' => $this->categories->map->toSearchableArray(),
            'brand' => $this->brand?->toSearchableArray(),
            'price' => $this->price?->price,
            'similar_product_codes' => explode(",", $this->similar_product_codes)
        ];
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function price(): HasOne
    {
        return $this->hasOne(Price::class)->where('variant_id', '=', null);
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
        return $this
            ->hasMany(Product::class, 'cross_code', 'cross_code')
            ->where('id', '!=', $this->id);
    }

    public function alternatives(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class, 'alternatives', 'product_id', 'alternative_id')
            ->where('id', '!=', $this->id);
    }

    public function fullTitle(): Attribute
    {
        return Attribute::get(fn () => $this->title.($this->producercode ? ' @'.$this->producercode : ''));
    }

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'product_cars', 'logicalref', 'car_id');
    }

    protected static function booted()
    {
        if (Garage::hasChosen()) {
            $chosen = Garage::chosen();
            //static::addGlobalScope("chosen_car", fn(Builder $builder) => $builder->whereRelation('cars', "id", "=", $chosen));
        }
    }
}
