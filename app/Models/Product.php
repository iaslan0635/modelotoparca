<?php

namespace App\Models;

use App\Facades\Garage;
use App\Packages\Utils;
use App\Traits\HasImages;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

class Product extends BaseModel implements CanVisit
{
    use Searchable, HasImages, HasVisits;

    public $incrementing = false;

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
        dump($this->id, $this->similars);
        dump($this->similars->map->toSearchableArrayWithOnlyCrossCode());
        $cars = $this->cars->filter(fn(Car $car) =>
            $car->body_type !== "truck" && $car->body_type !== "urban_bus"
        )->values();
        return dump($this->toSearchableArrayWithOnlyCrossCode() + [
                'id' => $this->id,
                'title' => $this->title,
                'sub_title' => $this->sub_title,
                'slug' => $this->slug,
                'part_number' => $this->part_number,
                'part_number_regex' => $this->part_number ? strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $this->part_number)) : null,
                'producercode' => $this->producercode,
                'producercode_unbranded' => $this->producercode_unbranded,
                'producercode_unbranded_regex' => $this->producercode_unbranded ? strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $this->producercode_unbranded)) : null,
                'producercode_regex' => $this->producercode ? strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $this->producercode)) : null,
                'producercode2' => $this->producercode2,
                'producercode2_regex' => $this->producercode2 ? strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $this->producercode2)) : null,

                'oems' => $this->oems->map->toSearchableArray(),
                'cars' => $cars->map->toSearchableArray(),
                'similars' => $this->similars->map->toSearchableArrayWithOnlyCrossCode(),
                'categories' => $this->categories->map->toSearchableArray(),
                'brand' => $this->brand?->toSearchableArray(),
                'price' => $this->price?->price,

                'full_text' => collect([$this->title, $this->sub_title])->merge($cars->map->getRegexedName())->join(" | "),
            ]);
    }

    public function toSearchableArrayWithOnlyCrossCode()
    {
        return [
            'cross_code' => $this->cross_code,
            'cross_code_regex' => $this->cross_code ? strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $this->cross_code)) : null,
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
            ->where('products.id', '!=', $this->id);
    }

    public function similars()
    {
        return $this
            ->belongsToMany(Product::class, 'product_similars', 'product_id', 'code', 'id', 'producercode')
            ->where('products.id', '!=', $this->id);
    }

    public function alternatives(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class, 'alternatives', 'product_id', 'alternative_id')
            ->where('products.id', '!=', $this->id);
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
            static::addGlobalScope("chosen_car", fn(Builder $builder) => $builder->whereRelation('cars', "id", "=", $chosen));
        }
    }

    /**
     * @param Collection<int, Product> $products
     * @return array<Collection>
     */
    public static function alternativesAndSimilars(Collection $products)
    {
        $idMatcher = fn(Product $p, Product $i) => $p->id === $i->id;

        $alternatives = $products->map(fn(Product $p) => $p->alternatives()->get())->flatten();
        $alternatives = Utils::uniqueOn($alternatives, $products, $idMatcher);

        $similars = $products->map(fn(Product $p) => $p->similars()->get())->flatten();
        $similars = Utils::uniqueOn($similars, $alternatives, $idMatcher);
        $similars = Utils::uniqueOn($similars, $products, $idMatcher);

        return [$alternatives, $similars];
    }

    public function sparetoConnections()
    {
        return $this->hasMany(SparetoConnection::class);
    }
}
