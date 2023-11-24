<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;
use App\Models\ProductMerchantAttribute;
use App\Models\Tracking;
use GuzzleHttp\Client;

class Hepsiburada implements Merchant, TrackableMerchant
{
    public const name = 'Hepsiburada';

    public string $key = 'hepsiburada';

    public string $merchantId;

    protected Client $client;

    public function __construct()
    {
        $this->merchantId = config("merchants.hepsiburada.merchantId");
        $this->client = new Client([
            "auth" => [config("merchants.hepsiburada.username"), config("merchants.hepsiburada.password")]
        ]);
    }

    private function formatPrice($price)
    {
        return number_format($price, 2, ',', '');
    }

    public function setStock(Product $product, $stock)
    {
        $this->client->post("https://listing-external.hepsiburada.com/Listings/merchantid/$this->merchantId/stock-uploads", ["json" => [
            "merchantSku" => $product->sku,
            "availableStock" => $product->quantity,
            "maximumPurchasableQuantity" => $product->quantity,
        ]]);
    }

    public function updatePrice(Product $product)
    {
        $this->client->post("https://listing-external.hepsiburada.com/Listings/merchantid/$this->merchantId/price-uploads", ["json" => [
            "merchantSku" => $product->sku,
            "price" => $this->formatPrice($product->price->price_without_tax)
        ]]);
    }

    public function updateProduct(Product $product)
    {
        $price = $this->formatPrice($product->price->price_without_tax);
        $payload = [
            "merchantId" => $this->merchantId,
            "items" => [
                [
                    "categoryId" => $product->categories[0]->merchants()
                        ->where('merchant', '=', "hepsiburada")->first()->merchant_id,
                    "merchantSku" => $product->sku,
                    "VaryantGroupID" => $product->sku,
                    "Barcode" => $product->sku,
                    "UrunAdi" => $product->title,
                    "UrunAciklamasi" => $product->description,
                    "Marka" => $product->brand->name,
                    "GarantiSuresi" => 24,
                    "kg" => "1",
                    "tax_vat_rate" => "20",
                    "price" => $price,
                    "stock" => $product->quantity,
                    "Image1" => "https://site.modelotoparca.com/images/products/defaults/product-1.jpg",
                    "Image2" => "https://site.modelotoparca.com/images/products/defaults/product-1.jpg",
                    "Image3" => "https://site.modelotoparca.com/images/products/defaults/product-1.jpg",
                    "Image4" => "https://site.modelotoparca.com/images/products/defaults/product-1.jpg",
                    "Image5" => "https://site.modelotoparca.com/images/products/defaults/product-1.jpg",
                    "Video1" => null,
                ]
            ]
        ];

        $json = json_encode($payload);


        $request = $this->client->post("https://mpop-sit.hepsiburada.com/ticket-api/api/integrator/import", [
            "multipart" => [
                [
                    'name' => 'file',
                    'filename' => 'integrator-ticket-upload.json',
                    'contents' => $json,
                ]
            ]
        ]);

        $response = json_decode($request->getBody()->getContents(), true);
        return $response["data"]["trackingId"];
    }

    public function updateOrder(MerchantOrder $order)
    {
        // TODO: Implement updateOrder() method.
    }

    public function updateDeliveryCode($id, $code)
    {
        // TODO: Implement updateDeliveryCode() method.
    }

    public function createProduct(Product $product)
    {
        $price = $this->formatPrice($product->price->price_without_tax);
        $fields = ProductMerchantAttribute::query()
            ->where('merchant', '=', 'hepsiburada')
            ->where('product_id', '=', $product->id)
            ->get()->mapWithKeys(fn($attr) => [$attr->merchant_id => $attr->merchant_value]);

        $images = $product->imageUrls()->values()->mapWithKeys(fn($image, $k) => ["Image$k" => $image]);

        $payload = [
            "categoryId" => $product->categories[0]->merchants()
                ->where('merchant', '=', "hepsiburada")->value('merchant_id'),
            "merchant" => $this->merchantId,
            "attributes" => [
                "merchantSku" => $product->sku,
                "VaryantGroupID" => $product->sku,
                "Barcode" => $product->sku,
                "UrunAdi" => $product->title,
                "UrunAciklamasi" => $product->description,
                "Marka" => $product->brand->name,
                "GarantiSuresi" => 24,
                "kg" => "1",
                "tax_vat_rate" => "20",
                "price" => $price,
                "stock" => $product->quantity,
                ...$images,
                ...$fields
            ]
        ];

        $json = json_encode($payload);


        $request = $this->client->post("https://mpop.hepsiburada.com/product/api/products/import?version=1", [
            "multipart" => [
                [
                    'name' => 'file',
                    'filename' => 'integrator.json',
                    'contents' => $json,
                ]
            ]
        ]);

        $response = json_decode($request->getBody()->getContents(), true);

        Tracking::create([
            'merchant' => "hepsiburada",
            'tracking_id' => $response["data"]["trackingId"],
            'product_id' => $product->id,
        ]);
        return $response["data"]["trackingId"];
    }

    public function getCategories()
    {
        $request = $this->client->get("https://mpop.hepsiburada.com/product/api/categories/get-all-categories?leaf=true&status=ACTIVE&available=true&version=1&page=0&size=2000");

        return json_decode($request->getBody());
    }

    public function getCategoryAttributes($categoryId)
    {
        $request = $this->client->get("https://mpop.hepsiburada.com/product/api/categories/$categoryId/attributes?version=1");

        return json_decode($request->getBody());
    }

    public function getCategoryAttributeValues($categoryId, $attributeId)
    {
        $page = 0;
        $size = 1000;
        $request = $this->client->get("https://mpop.hepsiburada.com/product/api/categories/$categoryId/attribute/$attributeId/values?version=4&page=$page&size=1000");

        return json_decode($request->getBody());
    }

    public function getCargoCompanies()
    {
        $request = $this->client->get("https://shipping-external-sit.hepsiburada.com/cargoFirms/$this->merchantId");

        return json_decode($request->getBody());
    }

    public function getBrands()
    {
        // TODO: Implement getBrands() method.
    }

    public function getOrders()
    {
        $request = $this->client->get("https://oms-external.hepsiburada.com/orders/merchantid/$this->merchantId");

        return json_decode($request->getBody());
    }

    public function approveOrder(MerchantOrder $order)
    {
        // TODO: Implement approveOrder() method.
    }

    public function declineOrder(MerchantOrder $order, string $reason, OrderRejectReasonType $reasonType)
    {
        // TODO: Implement declineOrder() method.
    }

    public function refundedOrders()
    {
        // TODO: Implement refundedOrders() method.
    }

    public function aprroveRefundedOrder(MerchantOrder $order)
    {
        // TODO: Implement aprroveRefundedOrder() method.
    }

    public function declineRefundedOrder($claimReturnId, $denyReasonId, $denyReasonNote)
    {
        // TODO: Implement declineRefundedOrder() method.
    }

    public function getQuestions()
    {
        // TODO: Implement getQuestions() method.
    }

    public function sendQuestionAnswer(MerchantOrder $question, string $answer)
    {
        // TODO: Implement sendQuestionAnswer() method.
    }

    public function deleteProduct(Product $product)
    {
        // TODO: Implement deleteProduct() method.
    }

    public function syncOrders()
    {
        $orders = $this->getOrders();
        foreach ($orders->items as $item) {
            MerchantOrder::updateOrCreate([
                "merchant_id" => $item->id,
                "merchant" => "hepsiburada",
            ], [
                "number" => $item->orderNumber,
                "client" => [
                    "id" => $item->customerId,
                    "name" => $item->customerName,
                ],
                "data" => $item,
                "price" => $item->totalPrice->amount,
                "date" => $item->orderDate, // FIXME: düzgün date parse yap
                "status" => $item->status,
                "delivery_status" => "",
                "payment_status" => "",
                "lines" => [],
                "line_data" => [],
            ]);
        }
    }

    public function parseOrder(MerchantOrder $order)
    {
        return [];
    }

    public function getTrackingResult(string $trackingId): TrackingResult
    {
        $request = $this->client->get("https://mpop.hepsiburada.com/product/api/products/status/$trackingId", [
            "query" => [
                "version" => 2,
                "page" => "0",
                "size" => 1000
            ]
        ]);

        $response = json_decode($request->getBody()->getContents(), true);

        return new TrackingResult(
            merchant: "hepsiburada",
            trackingId: $trackingId,
            success: $response["success"],
            result: $response["data"]
        );
    }
}
