<?php

namespace App\Models;

use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends BaseModel
{
    use Searchable;

    public $timestamps = false;
    protected $searchableAs = 'cars_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function shouldBeSearchable()
    {
        return $this->indexable;
    }

    public function toSearchableArray()
    {
        return $this->only(['id', 'name']) + ['regex_name' => $this->getRegexedName()];
    }

    public function getRegexedName()
    {
        return strtolower(preg_replace('/[^\w\s]/', '', $this->name));
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_cars', 'car_id', 'logicalref');
    }

    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }
}
