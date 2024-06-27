<?php

namespace App\Services\Bots;

use Illuminate\Support\Facades\Http;

class OcpClient
{
    /**
     * @param string $url
     * @return string
     * @throws OcpClientException
     */
    public static function request(string $url): string
    {
        $response = Http::get("http://127.0.0.1:3000/?url=" . urlencode($url));

        if (!$response->ok()) {
            throw new OcpClientException($response->status(), $url, $response->body());
        }

        return $response->body();
    }
}
