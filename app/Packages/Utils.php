<?php

namespace App\Packages;

use Illuminate\Support\Collection;

class Utils
{
    public static function uniqueOn(Collection $collection, Collection $uniqueOn, callable $uniqueBy): Collection
    {
        return $collection->reject(fn($item) => $uniqueOn->some(fn($other) => $uniqueBy($item, $other)));
    }
}
