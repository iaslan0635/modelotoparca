<?php

namespace App\Packages;

/** Symbol tolerant string comparison */
class Fuzz
{
    public static function isEqual(string $lhs, string $rhs): bool
    {
        return self::regexify($lhs) === self::regexify($rhs);
    }

    public static function regexify(string $string): string
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $string));
    }

    public static function regexifyNullable(?string $string): ?string
    {
        return $string === null ? null : self::regexify($string);
    }
}
