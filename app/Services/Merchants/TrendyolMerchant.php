<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class TrendyolMerchant implements Merchant
{
    public const name = 'Trendyol';

    public string $key = 'trendyol';

    public string $supplierId = "";

    protected Client $client;

    public function __construct()
    {
        $this->supplierId = config("merchants.trendyol.supplierId");
        $this->client = new Client([
            'base_uri' => 'https://api.trendyol.com/sapigw/',
            "auth" => [config("merchants.trendyol.username"), config("merchants.trendyol.password")]
        ]);
    }

    private function formatPrice($price)
    {
        return number_format($price, 2, '.', '');
    }

    public function getAuthenticationInfo()
    {
        return [
            'username' => [
                'label' => 'Kullanıcı adı',
                'type' => 'string',
                'value' => $this->username,
            ],
            'password' => [
                'label' => 'Parola',
                'type' => 'password',
                'value' => $this->password,
            ],
        ];
    }

    public function setAuthenticationInfo(array $info)
    {

    }

    public function setStock(Product $product, $stock)
    {
        $request = $this->client->post("suppliers/$this->supplierId/products/price-and-inventory", ["json" => [
            "items" => [
                [
                    "barcode" => $product->sku,
                    "quantity" => $stock
                ]
            ]
        ]]);

        return json_decode($request->getBody())->batchRequestId;
    }

    public function getOrders()
    {
        $request = $this->client->get("suppliers/$this->supplierId/orders");

        return json_decode($request->getBody());
    }

    public function getQuestions()
    {
        $request = $this->client->get("suppliers/$this->supplierId/questions/filter");

        return json_decode($request->getBody());
    }

    public function updateProduct(Product $product)
    {
        return $this->sendProduct($product, "PUT");
    }

    private function sendProduct(Product $product, string $method)
    {
        $response = $this->client->request($method, "suppliers/$this->supplierId/v2/products", ["json" => [
            "items" => [
                [
                    "barcode" => $product->sku,
                    "title" => $product->title,
                    "productMainId" => $product->sku,
                    "brandId" => $product->brand->merchants()
                        ->where('merchant', '=', "trendyol")->first()->merchant_id,
                    "categoryId" => $product->categories[0]->merchants()
                        ->where('merchant', '=', "trendyol")->first()->merchant_id,
                    "stockCode" => $product->sku,
                    "dimensionalWeight" => 0,
                    "description" => $product->description,
                    "vatRate" => 20,
                    "images" => $product->images->map(fn($image) => ["url" => $image->url]),
                    "cargoCompanyId" => 10,

                ]
            ]
        ]]);

        $this->setStock($product, $product->quantity);
        $this->updatePrice($product);

        return json_decode($response->getBody())->batchRequestId;
    }

    public function updateOrder(MerchantOrder $order)
    {
        $request = $this->client->get();
    }

    public function updateDeliveryCode($id, $code): bool
    {
        $this->client->put("suppliers/$this->supplierId/$id/update-tracking-number", ["json" => [
            "trackingNumber" => $code
        ]]);

        return true;
    }

    public function declineOrder(MerchantOrder $order, string $reason, OrderRejectReasonType $reasonType)
    {
        // TODO: Implement declineOrder() method.
    }

    public function createProduct(Product $product)
    {
        return $this->sendProduct($product, "POST");
    }

    public function getCategories()
    {
        $request = $this->client->get("product-categories");

        return json_decode($request->getBody());
    }

    public function getCategoryAttributes($categoryId)
    {
        $request = $this->client->get("product-categories/$categoryId/attributes");

        return json_decode($request->getBody());
    }

    public function getCargoCompanies()
    {
        return array(
            array(
                'Id' => 42,
                'Code' => 'DHLMP',
                'Name' => 'DHL Marketplace',
                'Tax Number' => '951-241-77-13'
            ),
            array(
                'Id' => 38,
                'Code' => 'SENDEOMP',
                'Name' => 'Sendeo Marketplace',
                'Tax Number' => '2910804196'
            ),
            array(
                'Id' => 36,
                'Code' => 'NETMP',
                'Name' => 'NetKargo Lojistik Marketplace',
                'Tax Number' => '6930094440'
            ),
            array(
                'Id' => 34,
                'Code' => 'MARSMP',
                'Name' => 'Mars Lojistik Marketplace',
                'Tax Number' => '6120538808'
            ),
            array(
                'Id' => 39,
                'Code' => 'BIRGUNDEMP',
                'Name' => 'Bir Günde Kargo Marketplace',
                'Tax Number' => '1770545653'
            ),
            array(
                'Id' => 35,
                'Code' => 'OCTOMP',
                'Name' => 'Octovan Lojistik Marketplace',
                'Tax Number' => '6330506845'
            ),
            array(
                'Id' => 30,
                'Code' => 'BORMP',
                'Name' => 'Borusan Lojistik Marketplace',
                'Tax Number' => '1800038254'
            ),
            array(
                'Id' => 12,
                'Code' => 'UPSMP',
                'Name' => 'UPS Kargo Marketplace',
                'Tax Number' => '9170014856'
            ),
            array(
                'Id' => 13,
                'Code' => 'AGTMP',
                'Name' => 'AGT Marketplace',
                'Tax Number' => '6090414309'
            ),
            array(
                'Id' => 14,
                'Code' => 'CAIMP',
                'Name' => 'Cainiao Marketplace',
                'Tax Number' => '0'
            ),
            array(
                'Id' => 10,
                'Code' => 'MNGMP',
                'Name' => 'MNG Kargo Marketplace',
                'Tax Number' => '6080712084'
            ),
            array(
                'Id' => 19,
                'Code' => 'PTTMP',
                'Name' => 'PTT Kargo Marketplace',
                'Tax Number' => '7320068060'
            ),
            array(
                'Id' => 9,
                'Code' => 'SURATMP',
                'Name' => 'Sürat Kargo Marketplace',
                'Tax Number' => '7870233582'
            ),
            array(
                'Id' => 17,
                'Code' => 'TEXMP',
                'Name' => 'Trendyol Express Marketplace',
                'Tax Number' => '8590921777'
            ),
            array(
                'Id' => 6,
                'Code' => 'HOROZMP',
                'Name' => 'Horoz Kargo Marketplace',
                'Tax Number' => '4630097122'
            ),
            array(
                'Id' => 20,
                'Code' => 'CEVAMP',
                'Name' => 'CEVA Marketplace',
                'Tax Number' => '8450298557'
            ),
            array(
                'Id' => 4,
                'Code' => 'YKMP',
                'Name' => 'Yurtiçi Kargo Marketplace',
                'Tax Number' => '3130557669'
            ),
            array(
                'Id' => 7,
                'Code' => 'ARASMP',
                'Name' => 'Aras Kargo Marketplace',
                'Tax Number' => '720039666'
            )
        );
    }

    public function getBrands()
    {
        $request = $this->client->get("brands");

        return json_decode($request->getBody(), true)["brands"];
    }

    public function approveOrder(MerchantOrder $order)
    {
        // TODO: Implement approveOrder() method.
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

    public function sendQuestionAnswer(MerchantOrder $question, string $answer): bool
    {
        $this->client->post("suppliers/$this->supplierId/questions/$question->merchant_id/answers", ["json" => [
            "text" => $answer
        ]]);

        return true;
    }

    public function deleteProduct(Product $product)
    {
        $request = $this->client->delete("suppliers/$this->supplierId/v2/products", ["json" => [
            "items" => [
                [
                    "barcode" => $product->sku
                ]
            ]
        ]]);

        return json_decode($request->getBody())->batchRequestId;
    }

    public function updatePrice(Product $product)
    {
        $request = $this->client->post("suppliers/$this->supplierId/products/price-and-inventory", ["json" => [
            "items" => [
                [
                    "barcode" => $product->sku,
                    "salePrice" => $this->formatPrice($product->price->price),
                    "listPrice" => $this->formatPrice($product->price->discounted_price),
                ]
            ]
        ]]);

        $body = json_decode($request->getBody());

        return $body->batchRequestId;
    }

    public function syncOrders()
    {
        $orders = $this->getOrders();

        foreach ($orders->content as $item) {
            MerchantOrder::updateOrCreate([
                "merchant_id" => $item->id,
                "merchant" => "trendyol",
            ], [
                "number" => $item->orderNumber,
                "client" => [
                    "id" => $item->customerId,
                    "name" => $item->customerFirstName,
                ],
                "data" => $item,
                "price" => $item->totalPrice,
                "date" => $item->orderDate, // FIXME: düzgün date parse yap
                "status" => $item->status,
                "delivery_status" => "",
                "payment_status" => "",
                "lines" => [],
                "line_data" => [],
            ]);
        }
    }

    public static function parseOrder(MerchantOrder $order)
    {
        return [];
    }
}
