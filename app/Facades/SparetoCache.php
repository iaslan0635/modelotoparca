<?php

namespace App\Facades;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class SparetoCache
{

    protected static function hashedDriver(): FilesystemAdapter
    {
        return \Storage::createLocalDriver(["root" => storage_path("spareto_cache_hashed")]);
    }

    protected static function driver(): FilesystemAdapter
    {
        return \Storage::createLocalDriver(["root" => storage_path("spareto_cache")]);
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
        if (self::driver()->has(self::getCacheFileName($url))) return true;
        if (self::hashedDriver()->has(self::getHashedCacheFileName($url))) {
            $path = self::hashedDriver()->path(self::getHashedCacheFileName($url));
            $to_path = self::driver()->path(self::getCacheFileName($url));
            copy($path, $to_path);
            return true;
        } else return false;
    }

    protected static function request(string $url)
    {
        return HTTP::withOptions([
            'proxy' => 'socks5://127.0.0.1:9050',
            'connect_timeout' => 60
        ])->get($url)->throw()->body();
    }

    protected static function getHashedCacheFileName(string $url)
    {
        return hash("sha256", $url) . ".html";
    }

    protected static function getCacheFileName(string $url)
    {
        return base64_encode($url) . ".html";
    }

    /** @return string cache content */
    protected static function createCache(string $url)
    {
        $path = self::getCacheFileName($url);
        $content = self::request($url);
        self::driver()->write($path, $content);
        return $content;
    }

    protected static function readCache(string $url)
    {
        $path = self::getCacheFileName($url);
        return self::driver()->get($path);
    }
}
