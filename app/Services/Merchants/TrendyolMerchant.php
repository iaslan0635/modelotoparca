<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;
use App\Models\ProductMerchantAttribute;
use App\Models\Tracking;
use App\Models\TrendyolBrand;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class TrendyolMerchant implements Merchant, TrackableMerchant
{
    public readonly string $supplierId;
    private array $creds;

    public function __construct()
    {
        $keyPrefix = config("merchants.test_mode") ? ".test_creds" : "";
        $this->creds = config("merchants$keyPrefix.trendyol");
        $this->supplierId = $this->creds["supplierId"];
    }

    private function client(): PendingRequest
    {
        return Http::withBasicAuth(
            $this->creds["username"],
            $this->creds["password"],
        )->throw()->baseUrl($this->baseUrl());
    }

    private function supplierClient(): PendingRequest
    {
        return $this->client()->baseUrl("{$this->baseUrl()}suppliers/$this->supplierId/");
    }

    private function baseUrl()
    {
        return config("merchants.test_mode") ? "https://stageapi.trendyol.com/stagesapigw/" : 'https://api.trendyol.com/sapigw/';
    }

    private function preparePriceToSend($price)
    {
        $price *= (100 + merchant_setting("trendyol", "comission", 0)) / 100;
        return number_format($price, 2, '.', '');
    }

    public function setStock(Product $product, $stock)
    {
        return $this->supplierClient()->post("products/price-and-inventory", [
            "items" => [
                [
                    "barcode" => $product->sku,
                    "quantity" => $stock
                ]
            ]
        ])->object()->batchRequestId;
    }

    public function getOrders()
    {
        return $this->supplierClient()->get("orders")->object();
    }

    public function getQuestions()
    {
        return $this->supplierClient()->get("questions/filter")->object();
    }

    public function sendProduct(Product $product)
    {
        $exists = $this->supplierClient()->get("products", ["barcode" => $product->sku])
                ->object()->totalElements > 0;
        $method = $exists ? "PUT" : "POST";

        return $this->_sendProduct($product, $method);
    }

    private function _sendProduct(Product $product, string $method)
    {
        $fields = ProductMerchantAttribute::query()
            ->where('merchant', '=', 'trendyol')
            ->where('product_id', '=', $product->id)
            ->get();

        $attributes = [];

        foreach ($fields as $field) {
            if ($field->merchant_value_id) {
                $attributes[] = [
                    'attributeId' => $field->merchant_id,
                    'attributeValueId' => $field->merchant_value_id
                ];
            } else {
                $attributes[] = [
                    'attributeId' => $field->merchant_id,
                    'customAttributeValue' => $field->merchant_value
                ];
            }
        }

        $response = $this->supplierClient()->send($method, "v2/products", ["json" => [
            "items" => [
                [
                    "barcode" => $product->sku,
                    "title" => $product->title,
                    "productMainId" => $product->sku,
                    "brandId" => $product->brand->merchants()
                        ->where('merchant', '=', "trendyol")->valueOrFail("merchant_id"),
                    "categoryId" => $product->categories[0]->merchants()
                        ->where('merchant', '=', "trendyol")->valueOrFail("merchant_id"),
                    "stockCode" => $product->sku,
                    "dimensionalWeight" => 0,
                    "description" => $product->description,
                    "vatRate" => 20,
                    "images" => $product->imageUrls()->map(fn($image) => ["url" => $image]),
                    "cargoCompanyId" => 10,
                    "listPrice" => $this->preparePriceToSend($product->price->price_without_tax),
                    "quantity" => $product->quantity,
                    "salePrice" => $this->preparePriceToSend($product->price->discounted_price_without_tax),
                    "brand" => $product->brand->name, //?
                    "currencyType" => 'TRY', // Bütün pazaryerlerine TL göndereceğiz
                    "attributes" => $attributes
                ]
            ]
        ]])->object();

        if (!property_exists($response, "batchRequestId"))
            // hata olduğunda batchRequestId gelmez
            dd($response);

        $this->setStock($product, $product->quantity);
        $this->updatePrice($product);

        Tracking::create([
            'merchant' => "trendyol",
            'tracking_id' => $response->batchRequestId,
            'product_id' => $product->id,
        ]);

        return $response->batchRequestId;
    }

    public function updateOrder(MerchantOrder $order)
    {
        // TODO: Implement updateOrder() method.
    }

    public function updateDeliveryCode($id, $code): bool
    {
        $this->supplierClient()->put("$id/update-tracking-number", [
            "trackingNumber" => $code
        ]);

        return true;
    }

    public function declineOrder(string $lineId, OrderRejectReasonType $reasonType, string $shipmentPackageId, int $quantity)
    {
        $reasonId = match ($reasonType) {
            OrderRejectReasonType::OUT_OF_STOCK => 501,
            OrderRejectReasonType::BROKEN_PRODUCT => 502,
            OrderRejectReasonType::INCORRECT_PRICE => 503,
            OrderRejectReasonType::INTEGRATION_ERROR => 504,
            OrderRejectReasonType::BULK_PURCHASE => 505,
            OrderRejectReasonType::FORCE_MAJEURE => 506,
        };

        return $this->client()->put(
            "/integration/oms/core/sellers/$this->supplierId/shipment-packages/$shipmentPackageId/items/unsupplied",
            [
                "lines" => [
                    [
                        "lineId" => $lineId,
                        "quantity" => $quantity
                    ]
                ],
                "reasonId" => $reasonId
            ]
        );
    }

    public function createProduct(Product $product)
    {
        return $this->sendProduct($product, "POST");
    }

    public function getCategories()
    {
        return $this->client()->get("product-categories")->object();
    }

    public function getCategoryAttributes($categoryId)
    {
        return $this->client()->get("product-categories/$categoryId/attributes")->object();
    }

    public function getCargoCompanies()
    {
        return [
            [
                'Id' => 42,
                'Code' => 'DHLMP',
                'Name' => 'DHL Marketplace',
                'Tax Number' => '951-241-77-13'
            ],
            [
                'Id' => 38,
                'Code' => 'SENDEOMP',
                'Name' => 'Sendeo Marketplace',
                'Tax Number' => '2910804196'
            ],
            [
                'Id' => 36,
                'Code' => 'NETMP',
                'Name' => 'NetKargo Lojistik Marketplace',
                'Tax Number' => '6930094440'
            ],
            [
                'Id' => 34,
                'Code' => 'MARSMP',
                'Name' => 'Mars Lojistik Marketplace',
                'Tax Number' => '6120538808'
            ],
            [
                'Id' => 39,
                'Code' => 'BIRGUNDEMP',
                'Name' => 'Bir Günde Kargo Marketplace',
                'Tax Number' => '1770545653'
            ],
            [
                'Id' => 35,
                'Code' => 'OCTOMP',
                'Name' => 'Octovan Lojistik Marketplace',
                'Tax Number' => '6330506845'
            ],
            [
                'Id' => 30,
                'Code' => 'BORMP',
                'Name' => 'Borusan Lojistik Marketplace',
                'Tax Number' => '1800038254'
            ],
            [
                'Id' => 12,
                'Code' => 'UPSMP',
                'Name' => 'UPS Kargo Marketplace',
                'Tax Number' => '9170014856'
            ],
            [
                'Id' => 13,
                'Code' => 'AGTMP',
                'Name' => 'AGT Marketplace',
                'Tax Number' => '6090414309'
            ],
            [
                'Id' => 14,
                'Code' => 'CAIMP',
                'Name' => 'Cainiao Marketplace',
                'Tax Number' => '0'
            ],
            [
                'Id' => 10,
                'Code' => 'MNGMP',
                'Name' => 'MNG Kargo Marketplace',
                'Tax Number' => '6080712084'
            ],
            [
                'Id' => 19,
                'Code' => 'PTTMP',
                'Name' => 'PTT Kargo Marketplace',
                'Tax Number' => '7320068060'
            ],
            [
                'Id' => 9,
                'Code' => 'SURATMP',
                'Name' => 'Sürat Kargo Marketplace',
                'Tax Number' => '7870233582'
            ],
            [
                'Id' => 17,
                'Code' => 'TEXMP',
                'Name' => 'Trendyol Express Marketplace',
                'Tax Number' => '8590921777'
            ],
            [
                'Id' => 6,
                'Code' => 'HOROZMP',
                'Name' => 'Horoz Kargo Marketplace',
                'Tax Number' => '4630097122'
            ],
            [
                'Id' => 20,
                'Code' => 'CEVAMP',
                'Name' => 'CEVA Marketplace',
                'Tax Number' => '8450298557'
            ],
            [
                'Id' => 4,
                'Code' => 'YKMP',
                'Name' => 'Yurtiçi Kargo Marketplace',
                'Tax Number' => '3130557669'
            ],
            [
                'Id' => 7,
                'Code' => 'ARASMP',
                'Name' => 'Aras Kargo Marketplace',
                'Tax Number' => '720039666'
            ]
        ];
    }

    public function getBrands(int $page = 1)
    {
        return $this->client()->get("brands", ["page" => $page])->object()->brands;
    }

    public function getAllBrands()
    {
        $page = 1;
        while (true) {
            $response = $this->client()->get("brands", ["page" => $page])->object();
            if (!property_exists($response, "brands")) break;
            yield from $response->brands;
            $page++;
        }
    }

    /** Fetch brands into database */
    public function fetchBrands()
    {
        foreach ($this->getAllBrands() as $brand) {
            TrendyolBrand::updateOrCreate(
                ["id" => $brand->id],
                ["name" => $brand->name]
            );
        }
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
        $this->supplierClient()->post("questions/$question->merchant_id/answers", [
            "text" => $answer
        ]);

        return true;
    }

    public function deleteProduct(Product $product)
    {
        return $this->supplierClient()->delete("v2/products", [
            "items" => [
                [
                    "barcode" => $product->sku
                ]
            ]
        ])->object()->batchRequestId;
    }

    public function updatePrice(Product $product)
    {
        return $this->supplierClient()->post("products/price-and-inventory", [
            "items" => [
                [
                    "barcode" => $product->sku,
                    "salePrice" => $this->preparePriceToSend($product->price->price_without_tax),
                    "listPrice" => $this->preparePriceToSend($product->price->discounted_price_without_tax),
                ]
            ]
        ])->object()->batchRequestId;
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

    public function parseOrder(MerchantOrder $order)
    {
        return [];
    }

    public function getTrackingResult(string $trackingId): PromiseInterface
    {
        /** @var PromiseInterface $request */
        $request = $this->supplierClient()->async()->get("products/batch-requests/$trackingId");
        return $request->then(fn($response) => new TrackingResult(
            trackingId: $trackingId,
            success: property_exists($response, "status") && $response->status === "COMPLETED",
            result: $response
        ));
    }

    public function parseTrackingErrors(array $trackingResponse): array
    {
        return collect(@$trackingResponse["errors"])->map(fn($err) => "Karşı tarafın hatası ({$err['message']})")->concat(
            collect(@$trackingResponse["items"])->map(fn($item) => $item["failureReasons"])->flatten()->all()
        )->all();
    }

    public function createTestOrder()
    {
        if (!config("merchants.test_mode"))
            throw new \Exception("TrendyolMerchant::createTestOrder() requires merchants.test_mode to be true");

        return $this->client()
            ->withHeader("SellerID", $this->supplierId)
            ->post("https://stageapi.trendyol.com/integration/oms/core", [
                'customer' => [
                    'customerFirstName' => 'string',
                    'customerLastName' => 'string',
                ],
                'invoiceAddress' => [
                    'addressText' => 'string',
                    'city' => 'string',
                    'company' => 'string',
                    'district' => 'string',
                    'email' => 'string',
                    'invoiceFirstName' => 'string',
                    'invoiceLastName' => 'string',
                    'latitude' => 'string',
                    'longitude' => 'string',
                    'neighborhood' => 'string',
                    'phone' => 'string',
                    'postalCode' => 'string',
                ],
                'lines' => [
                    [
                        'barcode' => 'string',
                        'quantity' => 0,
                    ],
                    [
                        'barcode' => 'string',
                        'quantity' => 0,
                    ],
                ],
                'seller' => ['sellerId' => $this->supplierId],
                'shippingAddress' => [
                    'addressText' => 'string',
                    'city' => 'string',
                    'company' => 'string',
                    'district' => 'string',
                    'email' => 'string',
                    'latitude' => 'string',
                    'longitude' => 'string',
                    'neighborhood' => 'string',
                    'phone' => 'string',
                    'postalCode' => 'string',
                    'shippingFirstName' => 'string',
                    'shippingLastName' => 'string',
                ],
            ]);
    }
}
