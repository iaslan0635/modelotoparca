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
        return [
                'id' => $this->id,
                'title' => $this->title,
                'slug' => $this->slug,
                'part_number' => $this->part_number,
                'part_number_regex' => $this->part_number ? preg_replace('/[^a-zA-Z0-9]+/', '', $this->part_number) : null,
                'producercode' => $this->producercode,
                'producercode_unbranded' => $this->producercode_unbranded,
                'producercode_unbranded_regex' => $this->producercode_unbranded ? preg_replace('/[^a-zA-Z0-9]+/', '', $this->producercode_unbranded) : null,
                'producercode_regex' => $this->producercode ? preg_replace('/[^a-zA-Z0-9]+/', '', $this->producercode) : null,
                'cross_code' => $this->cross_code,
                'cross_code_regex' => $this->cross_code ? preg_replace('/[^a-zA-Z0-9]+/', '', $this->cross_code) : null,
                'producercode2' => $this->producercode2,
                'producercode2_regex' => $this->producercode2 ? preg_replace('/[^a-zA-Z0-9]+/', '', $this->producercode2) : null,
            ] + [
                'oems' => $this->oems->map->toSearchableArray(),
                'cars' => $this->cars->map->toSearchableArray(),
                'categories' => $this->categories->map->toSearchableArray(),
                'brand' => $this->brand?->toSearchableArray(),
                'price' => $this->price?->price,
                'similars' => $this->similars->map->toSearchableArray()
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

    public function similars(): HasMany
    {
        return $this->hasMany(ProductSimilar::class);
    }

    public function alternatives(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class, 'alternatives', 'product_id', 'alternative_id')
            ->where('id', '!=', $this->id);
    }

    public function fullTitle(): Attribute
    {
        return Attribute::get(fn() => $this->title . ($this->producercode ? ' @' . $this->producercode : ''));
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
