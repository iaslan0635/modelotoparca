<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Model;

class SearchPage extends Model
{
    public $timestamps = false;

    protected $casts = [
        'brands' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->using(SearchPageProduct::class);
    }

    public function toUrl()
    {
        return Url::fromSearchPage($this);
    }
}
