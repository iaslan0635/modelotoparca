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

    public function getProducts($page = 0, $size = 100)
    {
        $url = "{$this->baseUrl}/suppliers/{$this->supplierId}/products";

        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)->get($url, [
            'page' => $page,
            'size' => $size,
        ]);

        return $response->json();
    }

    public function createProduct(array $productData)
    {
        $url = "{$this->baseUrl}/v2/products";

        $payload = [
            'items' => [
                [
                    'barcode' => $productData['barcode'],
                    'title' => $productData['title'],
                    'productMainId' => $productData['sku'],
                    'brandId' => $productData['brand_id'], // Trendyol'daki Marka ID
                    'categoryId' => $productData['category_id'], // Trendyol'daki Kategori ID
                    'quantity' => $productData['quantity'],
                    'stockCode' => $productData['stock_code'] ?? $productData['sku'], // yoksa sku
                    'dimensionalWeight' => $productData['dimensional_weight'] ?? 1, // default 1
                    'currencyType' => 'TRY',
                    'listPrice' => $productData['list_price'],
                    'salePrice' => $productData['sale_price'],
                    'vatRate' => $productData['vat_rate'] ?? 18,
                    'images' => $productData['images'] ?? [],
                ]
            ]
        ];

        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeaders([
                'Content-Type' => 'application/json'
            ])
            ->post($url, $payload);

        return $response->json();
    }


    public function testConnection()
    {
        $url = "{$this->baseUrl}/suppliers/{$this->supplierId}/products";

        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->get($url, [
                'page' => 0,
                'size' => 1, // Sadece 1 ürün çağır
            ]);

        return $response->json();
    }


}
