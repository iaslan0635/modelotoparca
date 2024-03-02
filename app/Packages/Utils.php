<?php

namespace App\Packages;

class Utils
{
    /**
     * Convert a nested array of pairs to an associative array.
     *
     * @param  array  $array The input array containing pairs. ["A", "B"], ["C", "D"]]
     * @return array The associative array. ["A" => "B", "C" => "D"]
     */
    public static function arrayPair(array $array): array
    {
        return array_combine(
            array_column($array, 0),
            array_column($array, 1)
        );
    }

    /**
     * Flatten an array by one level.
     *
     * @param  array  $array The array to be flattened.
     * @return array The flattened array.
     */
    public static function flattenOne(array $array)
    {
        return array_merge(...$array);
    }

    /** PHP equivalent of Object.fromEntries()
     * @template TKey of array-key
     * @template TValue
     *
     * @param  array<array-key, array{TKey, TValue}>  $array
     * @return array<TKey, TValue>
     */
    public static function fromEntries(array $array)
    {
        return array_combine(array_column($array, 0), array_column($array, 1));
    }

    public static function regex(string $pattern, string $subject, int $group, mixed $default = null)
    {
        return preg_match($pattern, $subject, $matches) ? $matches[$group] : $default;
    }
}
