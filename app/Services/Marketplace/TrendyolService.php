<?php

namespace App\Services\Marketplace;

use Illuminate\Support\Facades\Http;

class TrendyolService
{
    protected string $apiKey;
    protected string $apiSecret;
    protected string $supplierId;
//    protected string $baseUrl = 'https://stageapi.trendyol.com/stagesapigw';
    protected string $baseUrl = 'https://api.trendyol.com/sapigw';

    public function __construct(string $apiKey, string $apiSecret, string $supplierId)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->supplierId = $supplierId;
    }

    public function getOrders()
    {
        $url = "{$this->baseUrl}/suppliers/{$this->supplierId}/orders";
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)->get($url, [
            'status' => 'Created',
            'page' => 0,
            'size' => 10,
        ]);

        return $response->json();
    }

    public function getProducts()
    {
        $url = "{$this->baseUrl}/suppliers/{$this->supplierId}/products";

        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)->get($url, [
            'page' => 0,
            'size' => 20,
        ]);

        return $response->json();
    }

}
