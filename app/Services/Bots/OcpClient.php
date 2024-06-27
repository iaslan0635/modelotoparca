<?php

namespace App\Services\Bots;

use App\Facades\TTL;
use Illuminate\Support\Facades\Cache;

class OcpClient
{
    /**
     * @param string $url
     * @return string
     * @throws OcpClientException
     */
    public static function request(string $url): string
    {
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_3);
        curl_setopt($curlHandle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 12; sdk_gphone64_x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Mobile Safari/537.36');
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($curlHandle);
        $httpStatusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
        curl_close($curlHandle);

        if (curl_errno($curlHandle)) {
            throw new \Exception(curl_error($curlHandle));
        }
        if (str_contains($response, '<title>Just a moment...</title>')) {
            throw new \Exception("Response blocked by cloudflare.\nurl: $url\nresponse: $response");
        }

        if (! ($httpStatusCode >= 200 && $httpStatusCode < 300)) {
            throw new OcpClientException($httpStatusCode, $url, $response);
        }

        return $response;
    }
}
