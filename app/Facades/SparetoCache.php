<?php

namespace App\Facades;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SparetoCache
{
    public static function table()
    {
        return DB::table('spareto_cache');
    }

    /**
     * GET url using cache
     *
     * @param $url string
     * @param  bool  $incrementHit
     *
     * @throws RequestException
     */
    public static function get(string $url, $incrementHit = true): string
    {
        $content = self::table()->where('url', $url)->value('content');

        if (is_null($content)) {
            $content = HTTP::get($url)->throw()->body();
            self::table()->insertOrIgnore(compact('url', 'content'));
        }

        if ($incrementHit) {
            self::table()->where('url', $url)->increment('hits');
        }

        return $content;
    }

    /** Add url content to cache if not exists
     *  without retrieving cached content
     *
     * @throws RequestException
     */
    public static function insert(string $url): void
    {
        // Do nothing if cache exists
        if (self::table()->where('url', $url)->exists()) {
            return;
        }

        $content = HTTP::get($url)->throw()->body();
        self::table()->insertOrIgnore(compact('url', 'content'));
    }
}
