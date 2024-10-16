<?php

namespace App\Services\Bots;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Http;

class OcpClient
{
    public static function requestWithoutRetry(string $url): string
    {
        $url = urlencode($url);
        return Http::throw()->post(
            "http://141.11.109.246:5184/api/Home/Get?url=$url"
        )->body();
    }

    public static function request(string $url)
    {
        $attempts = 0;
        while (true) {
            try {
                return self::requestWithoutRetry($url);
            } catch (Exception $e) {
                $isGatewayTimeout = $e instanceof ClientException && $e->getResponse()->getStatusCode() !== 524;
                if ($isGatewayTimeout || $attempts >= 3) {
                    throw $e;
                }

                $attempts++;
                sleep(1);
            }
        }
    }
}
