<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;
use GuzzleHttp\Client;

class Hepsiburada implements Merchant
{
    public const name = 'Hepsiburada';

    public string $key = 'hepsiburada';

    public string $merchantId = "";

    protected Client $client;

    public function __construct()
    {
        $this->merchantId = config("merchants.hepsiburada.merchantId");
        $this->client = new Client([
            "auth" => [config("merchants.hepsiburada.username"), config("merchants.hepsiburada.password")]
        ]);
    }

    public function setStock(Product $product, $stock)
    {
        $this->client->post("https://listing-external.hepsiburada.com/Listings/merchantid/$this->merchantId/price-uploads", [
            [
                "merchantSku" => $product->sku,
                "availableStock" => $product->quantity,
                "maximumPurchasableQuantity" => $product->quantity,
            ]
        ]);
    }

    public function setPrice(Product $product, $salePrice, $listPrice)
    {
        $this->client->post("https://listing-external.hepsiburada.com/Listings/merchantid/$this->merchantId/price-uploads", [
            [
                "merchantSku" => $product->sku,
                "price" => number_format($product->price->price, 2, '.', '')
            ]
        ]);
    }

    public function updateProduct(Product $product)
    {
        // TODO: Implement updateProduct() method.
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
        dd($product->images);
        $price = number_format($product->price->price, 2, ',', '');

        $request = $this->client->post("https://mpop.hepsiburada.com/product/api/products/import?version=1", [
            [
                "categoryId" => $product->categories[0]->merchants()
                    ->where('merchant', '=', "hepsiburada")->first()->merchant_id,
                "merchant" => $this->merchantId,
                "attributes" => [
                    "merchantSku" => $product->sku,
                    "VaryantGroupID" => $product->sku,
                    "Barcode" => "1234567891234",
                    "UrunAdi" => $product->title,
                    "UrunAciklamasi" => $product->description,
                    "Marka" => $product->brand->name,
                    "GarantiSuresi" => 24,
                    "kg" => "1",
                    "tax_vat_rate" => "20",
                    "price" => $price,
                    "stock" => $product->quantity,
                    "Image1" => $product->images[0]?->url,
                    "Image2" => $product->images[1]?->url,
                    "Image3" => $product->images[2]?->url,
                    "Image4" => $product->images[3]?->url,
                    "Image5" => $product->images[4]?->url,
                    "Video1" => null,
                ]
            ]
        ]);

        dd($request->getBody());
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
}
