<?php

namespace App\Packages;

/** Symbol tolerant string comparison */
class Fuzz
{
    public static function isEqual(string $string1, string $string2): bool
    {
        return self::regexify($string1) === self::regexify($string2);
    }

    public static function regexify(string $string): string
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $string));
    }
}
