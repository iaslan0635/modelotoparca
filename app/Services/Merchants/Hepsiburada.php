<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;
use App\Models\ProductMerchantAttribute;
use App\Models\Tracking;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Support\Facades\Http;

class Hepsiburada implements Merchant, TrackableMerchant
{
    public readonly string $merchantId;

    public function __construct()
    {
        $this->merchantId = config("merchants.hepsiburada.merchantId");
    }

    private function baseUrl(string $service)
    {
        $sit = config("merchants.test_mode") ? "-sit" : "";
        return "https://$service$sit.hepsiburada.com/";
    }

    private function client(string $service)
    {
        return Http::withBasicAuth(
            config("merchants.hepsiburada.username"),
            config("merchants.hepsiburada.password")
        )->baseUrl($this->baseUrl($service));
    }

    private function formatPrice($price)
    {
        return number_format($price, 2, ',', '');
    }

    public function setStock(Product $product, $stock)
    {
        $this->client("listing-external")->post("Listings/merchantid/$this->merchantId/stock-uploads", [
            "merchantSku" => $product->sku,
            "availableStock" => $product->quantity,
            "maximumPurchasableQuantity" => $product->quantity,
        ]);
    }

    public function updatePrice(Product $product)
    {
        $this->client("listing-external")->post("Listings/merchantid/$this->merchantId/price-uploads", [
            "merchantSku" => $product->sku,
            "price" => $this->formatPrice($product->price->price_without_tax)
        ]);
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


        $response = $this->client("mpop")
            ->attach("file", $json, 'integrator-ticket-upload.json')
            ->post("ticket-api/api/integrator/import")->object();

        return $response->data->trackingId;
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


        $response = $this->client("mpop")
            ->attach("file", $json, 'integrator.json')
            ->post("product/api/products/import?version=1")
            ->object();

        $trackingId = $response->data->trackingId;
        Tracking::create([
            'merchant' => "hepsiburada",
            'tracking_id' => $trackingId,
            'product_id' => $product->id,
        ]);

        return $trackingId;
    }

    public function getCategories()
    {
        return $this->client("mpop")->get("product/api/categories/get-all-categories?leaf=true&status=ACTIVE&available=true&version=1&page=0&size=2000")->object();
    }

    public function getCategoryAttributes($categoryId)
    {
        return $this->client("mpop")->get("product/api/categories/$categoryId/attributes?version=1")->object();
    }

    public function getCategoryAttributeValues($categoryId, $attributeId)
    {
        $page = 0;
        $size = 1000;
        return $this->client("mpop")->get("product/api/categories/$categoryId/attribute/$attributeId/values?version=4&page=$page&size=$size")->object();
    }

    public function getCargoCompanies()
    {
        return $this->client("shipping-external")->get("cargoFirms/$this->merchantId")->object();
    }

    public function getBrands()
    {
        // TODO: Implement getBrands() method.
    }

    public function getOrders()
    {
        return $this->client("oms-external")->get("orders/merchantid/$this->merchantId")->object();
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

    public function getTrackingResult(string $trackingId): PromiseInterface
    {
        return $this->client("mpop")->async()->get("product/api/products/status/$trackingId")
            ->then(fn($request) => json_decode($request->getBody()->getContents(), true))
            ->then(fn($response) => new TrackingResult(
                trackingId: $trackingId,
                success: array_key_exists("success", $response) && $response["success"],
                result: $response
            ));
    }

    public function parseTrackingErrors(array $trackingResponse): array
    {
        return ["TODO"];
    }
}
