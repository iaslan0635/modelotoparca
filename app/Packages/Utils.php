<?php

namespace App\Packages;

use Illuminate\Support\Collection;

class Utils
{
    public static function uniqueOn(Collection $collection, Collection $uniqueOn, callable $uniqueBy): Collection
    {
        return $collection->reject(fn($item) => $uniqueOn->some(fn($other) => $uniqueBy($item, $other)));
    }

    /**
     * Convert a nested array of pairs to an associative array.
     *
     * @param array $inputArray The input array containing pairs. ["A", "B"], ["C", "D"]]
     * @return array The associative array. ["A" => "B", "C" => "D"]
     */
    public static function arrayPair(array $inputArray): array
    {
        return array_combine(
            array_column($inputArray, 0),
            array_column($inputArray, 1)
        );
    }
}
