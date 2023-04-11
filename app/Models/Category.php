<?php

namespace App\Models;

use App\Facades\CategoryFacade;
use App\Facades\TTL;
use App\Traits\HasImages;
use Coderflex\Laravisit\Concerns\HasVisits;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class Category extends BaseModel
{
    use HasImages, HasVisits, Searchable;

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, "parent_id");
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, "parent_id");
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "product_categories");
    }

    protected function deepProducts()
    {
        return $this->newQuery()->from("products")->join("product_categories", "products.id", "=", "product_categories.product_id")->whereIn("product_categories.category_id", $this->tree['childs']);
    }

    protected function deepProductsCount(): Attribute
    {
        return Attribute::get(fn() => Cache::remember("deep_product_count_{$this->id}", TTL::WEEK, fn() => $this->deepProducts()->count()));
    }

    public function scopeRoot(Builder $query): void
    {
        $query->whereNull('parent_id');
    }

    protected function tree(): Attribute
    {
        return Attribute::get(fn() => CategoryFacade::getTree($this->id));
    }

    public function imageUrl()
    {
        return "https://web.modelotoparca.com/images/categories/$this->slug.png";
    }
}
