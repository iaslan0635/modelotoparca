<?php

namespace App\Models;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends BaseModel
{
    use HasImages;

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, "parent_id");
    }

    public function parent(): HasMany
    {
        return $this->hasMany(Category::class, "parent_id");
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "product_categories");
    }

    public function scopeRoot(Builder $query): void
    {
        $query->whereNull('parent_id');
    }
}
