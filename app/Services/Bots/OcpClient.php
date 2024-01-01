<?php

namespace App\Services\Bots;

use App\Facades\TTL;
use Illuminate\Support\Facades\Cache;

class OcpClient
{
    public static function requestWithoutCache(string $url): string
    {
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_3);
        curl_setopt($curlHandle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 12; sdk_gphone64_x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Mobile Safari/537.36');
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_HEADER, true);

        $response = curl_exec($curlHandle);
        curl_close($curlHandle);

        list($headers, $body) = explode("\r\n\r\n", $response, 2);
        $httpStatusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

        if (curl_errno($curlHandle)) throw new \Exception(curl_error($curlHandle));
        if (str_contains($body, '<title>Just a moment...</title>')) throw new \Exception("Response blocked by cloudflare.");

        if (400 > $httpStatusCode && $httpStatusCode >= 300)
            return self::request($headers['Location']);
        if (!(200 <= $httpStatusCode && $httpStatusCode < 300))
            throw new \Exception("Http request failed with status code $httpStatusCode.\nUrl:$url\nResponse: $body");

        return $body;
    }

    public static function request(string $url): string
    {
        $cache = Cache::driver("file");
        $cached = $cache->get($url);
        if ($cached !== null) return $cached;

        $response = self::requestWithoutCache($url);
        $cache->set($url, $response, TTL::MONTH * 3);
        return $response;
    }
}
