<?php

namespace App\Facades;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class SparetoCache
{
    private static $__driver;

    public static function driver(): FilesystemAdapter
    {
        return self::$__driver ?? (self::$__driver = \Storage::createLocalDriver(["root" => storage_path("spareto_cache")]));
    }

    /**
     * GET url using cache
     *
     * @param $url string
     * @return string
     */
    public static function get(string $url): string
    {
        return self::has($url) ? self::readCache($url) : self::createCache($url);
    }

    public static function crawler(string $url): Crawler
    {
        return new Crawler(self::get($url), $url);
    }

    /** Add url content to cache if not exists
     *  without retrieving cached content
     *
     */
    public static function insert(string $url): void
    {
        if (!self::has($url))
            self::createCache($url);
    }

    public static function has(string $url)
    {
        return self::driver()->has(self::getCacheFilePath($url));
    }

    protected static function request(string $url)
    {
        return HTTP::withOptions(['proxy' => 'http://127.0.0.1:8888'])->get($url)->throw()->body();
    }

    protected static function getCacheFilePath(string $url)
    {
        return hash("sha256", $url) . ".html";
    }

    /** @return string cache content */
    protected static function createCache(string $url)
    {
        $path = self::getCacheFilePath($url);
        $content = self::request($url);
        self::driver()->write($path, $content);
        return $content;
    }

    protected static function readCache(string $url)
    {
        $path = self::getCacheFilePath($url);
        return self::driver()->get($path);
    }
}
