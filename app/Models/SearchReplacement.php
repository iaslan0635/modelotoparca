<?php

namespace App\Models;

use Cache;

class SearchReplacement extends BaseModel
{
    public static function replace(string $string): string
    {
        [$originals, $replacements] = SearchReplacement::getReplacements();
        return str_replace($originals, $replacements, $string);
    }

    public static function getReplacements(): array
    {
        return Cache::rememberForever(
            "search_replacements",
            function () {
                $srs = SearchReplacement::get(["original", "replacement"]);
                $originals = $srs->pluck("original");
                $replacements = $srs->pluck("replacement");
                return [$originals, $replacements];
            }
        );
    }

    public static function clearCache(): void
    {
        Cache::forget("search_replacements");
    }
}
