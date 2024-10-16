<?php

namespace App\Services\Bots;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Http;

class OcpClient
{
    /**
     * @throws OcpClientException
     */
    public static function requestWithoutRetry(string $url): string
    {
        return Http::get("http://141.11.109.246:5184/get-html", [
            'url' => $url,
        ])->body();
    }

    /**
     * @return string
     */
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
