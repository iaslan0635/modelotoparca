<?php

namespace App\Services\Bots;

class OcpClientException extends \Exception
{
    public function __construct(public int $statusCode, public string $url, string $response)
    {
        parent::__construct("Http request failed with status code $statusCode.\nUrl: $url\nResponse: $response");
    }
}
