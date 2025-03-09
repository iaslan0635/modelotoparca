<?php

namespace App\Models;

use App\Events\ProductChangedEvent;
use App\Events\ProductCreatedEvent;
use App\Facades\Garage;
use App\Jobs\Import\ExcelImport;
use App\Jobs\RunSingleBotJob;
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
    use HasImages {
        imageUrls as protected databaseImageUrls;
        imageUrl as protected databaseImageUrl;
    }
    use HasVisits, Searchable;

    public $incrementing = false;

    protected $dispatchesEvents = [
        'updated' => ProductChangedEvent::class,
        'created' => ProductCreatedEvent::class,
    ];

    protected $casts = [
        'specifications' => 'array',
        'dimensions' => 'array',
        'tecdoc' => 'array',
        'bot_meta' => 'array',
    ];

    protected $searchableAs = 'products_index';

    /**
     * @param  Collection<int, Product>  $products
     * @return array<Collection>
     */
    public static function alternativesAndSimilars(Collection $products)
    {
        $idComparer = fn(Product $p, Product $i) => $p->id <=> $i->id;

        $alternatives = $products->map(fn(Product $p) => $p->alternatives()->get())->flatten()->unique('id');
        $alternatives = $alternatives->diffUsing($products, $idComparer);

        $similars = $products->map(fn(Product $p) => $p->similars()->get())->flatten()->unique('id');
        $similars = $similars->diffUsing($products, $idComparer);
        $similars = $similars->diffUsing($alternatives, $idComparer);

        return [$alternatives, $similars];
    }

    public function alternatives(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class, 'alternatives', 'product_id', 'alternative_id')
            ->where('products.id', '!=', $this->id);
    }

    public function similars()
    {
        return $this
            ->belongsToMany(Product::class, 'product_similars', 'product_id', 'code', 'id', 'producercode')
            ->where('products.id', '!=', $this->id);
    }

    protected static function booted()
    {
        static::addGlobalScope('active', fn(Builder $builder) => $builder->where('status', '=', 1));

        if (Garage::hasChosen()) {
            $chosen = Garage::chosen();
            static::addGlobalScope('chosen_car', fn(Builder $builder) => $builder->whereRelation('cars', 'id', '=', $chosen));
        }
    }

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    /**
     * @return Collection<int, string>
     */
    public function imageUrls(): Collection
    {
        $images = [];
        if ($this->image_appendix & ExcelImport::IMAGE_11) {
            $images[] = $this->getImagePath('11');
        }
        if ($this->image_appendix & ExcelImport::IMAGE_12) {
            $images[] = $this->getImagePath('12');
        }

        return collect($this->databaseImageUrls())->merge($images);
    }

    protected function getImagePath($suffix)
    {
        return asset("storage/imported_images/{$this->id}_$suffix.webp");
    }

    public function imageUrl($default = null)
    {
        if ($this->image_appendix & ExcelImport::IMAGE_11) {
            return $this->getImagePath('11');
        }
        if ($this->image_appendix & ExcelImport::IMAGE_12) {
            return $this->getImagePath('12');
        }

        return $this->databaseImageUrl($default);
    }

    public function toSearchableArray()
    {
        $cars = $this->cars->filter(fn(Car $car) => $car->indexable && $car->body_type !== 'truck' && $car->body_type !== 'urban_bus')->values();

        $similars = collect(explode(',', $this->similar_product_codes ?? ''))->map(fn($s) => strtolower(trim($s)));
        $similars->push(...$this->similarCodes->map(fn(ProductSimilar $ps) => strtolower($ps->code)));

        $priceString = $this->price?->listingPrice()?->getValue();
        $price = $priceString === null ? null : floatval($priceString);

        return [
            'title' => strtolower($this->title),
            'sub_title' => $this->sub_title ? strtolower($this->sub_title) : null,
            'slug' => strtolower($this->slug),
            'part_number' => strtolower($this->part_number),
            'producercode' => $this->producercode ? strtolower($this->producercode) : null,
            'producercode_unbranded' => $this->producercode_unbranded ? strtolower($this->producercode_unbranded) : null,
            'cross_code' => $this->cross_code ? strtolower($this->cross_code) : null,
            'producercode2' => $this->producercode2 ? strtolower($this->producercode2) : null,
            'description' => $this->description ? strtolower($this->description) : null,
            'oems' => $this->oems->pluck('oem')->map(fn($oem) => strtolower($oem)),
            'similars' => $similars,
            'hidden_searchable' => $this->hidden_searchable ? strtolower($this->hidden_searchable) : null,
            'price' => $price,
            'tecdoc' => collect($this->tecdoc)->values(),

            'brand' => ($brand = $this->brand) ? ['id' => $brand->id, 'name' => $brand->name] : null,
            'categories' => $this->categories->map(fn(Category $category) => ['id' => $category->id, 'name' => strtolower($category->name)]),
            'cars' => $cars->map(fn(Car $car) => ['id' => $car->id, 'name' => strtolower($car->name)]),

            'status' => (bool) $this->status,
        ];
    }

    public function searchableWith()
    {
        return ['cars', 'oems', 'categories', 'brand', 'price'];
    }

    public function shouldBeSearchable()
    {
        return (bool) $this->status;
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

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    public function crosses(): HasMany
    {
        return $this
            ->hasMany(Product::class, 'cross_code', 'cross_code')
            ->where('products.id', '!=', $this->id);
    }

    public function similarCodes()
    {
        return $this->hasMany(ProductSimilar::class);
    }

    public function fullTitle(): Attribute
    {
        return Attribute::get(fn() => $this->title . ($this->producercode ? ' @' . $this->producercode : ''));
    }

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'product_cars', 'logicalref', 'car_id');
    }

    public function propertyValues(): BelongsToMany
    {
        return $this->belongsToMany(PropertyValue::class);
    }

    public function bots()
    {
        return $this->hasMany(BotProduct::class);
    }

    public function merchants(): HasMany
    {
        return $this->hasMany(ProductMerchant::class);
    }

    public function merchantAttributes(): HasMany
    {
        return $this->hasMany(ProductMerchantAttribute::class);
    }

    public function botImages()
    {
        return $this->hasMany(BotImage::class);
    }

    public function tiger()
    {
        return $this->hasOne(TigerProduct::class, 'id', 'id');
    }

    public function runBot()
    {
        dispatch(new RunSingleBotJob(TigerProduct::findOrFail($this->id)));
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
