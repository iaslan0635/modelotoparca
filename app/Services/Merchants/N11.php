<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Facades\N11Client\N11Client;
use App\Models\Image;
use App\Models\MerchantOrder;
use App\Models\MerchantQuestion;
use App\Models\Product;
use App\Models\ProductMerchant;

class N11 implements Merchant
{
    const PAYMENT_TYPE = [
        1 => 'Kredi Kartı',
        2 => 'BKMEXPRESS',
        3 => 'AKBANKDIREKT',
        4 => 'PAYPAL',
        5 => 'MallPoint',
        6 => 'GARANTIPAY',
        7 => 'GarantiLoan',
        8 => 'MasterPass',
        9 => 'ISBANKPAY',
        10 => 'PAYCELL',
        11 => 'COMPAY',
        12 => 'YKBPAY',
        13 => 'FIBABANK',
        14 => 'Other'
    ];

    const STATUS = [
        1 => 'İşlem Bekliyor',
        2 => 'İşlemde',
        3 => 'İptal Edilmiş',
        4 => 'Geçersiz',
        5 => 'Tamamlandı'
    ];

    const ITEM_STATUS = [
        1 => 'İşlem Bekliyor',
        2 => 'Ödendi',
        3 => 'Geçersiz',
        4 => 'İptal Edilmiş',
        5 => 'Kabul Edilmiş',
        6 => 'Kargoda',
        7 => 'Teslim Edilmiş',
        8 => 'Reddedilmiş',
        9 => 'İade Edildi',
        10 => 'Tamamlandı',
        11 => 'İade İptal Değişim Talep Edildi',
        12 => 'İade İptal Değişim Tamamlandı',
        13 => 'Kargoda İade',
        14 => 'Kargo Yapılması Gecikmiş',
        15 => 'Kabul Edilmiş Ama Zamanında Kargoya Verilmemiş',
        16 => 'Teslim Edilmiş İade',
        17 => 'Tamamlandıktan Sonra İade'
    ];

    const SERVICE_ITEM_TYPE = [
        1 => "Ürün Sipariş Kalemi",
        2 => "Servis Sipariş Kalemi",
        3 => "Gsm Sipariş Kalemi",
        4 => "Gezi Sipariş Kalemi"
    ];

    const INVOICE_TYPE = [
        1 => "Bireysel",
        2 => "Kurumsal"
    ];

    const DELIVERY_FEE_TYPE = [
        1 => "N11 Öder",
        2 => "Alıcı Öder",
        3 => "Mağaza Öder",
        4 => "Şartlı Kargo (Alıcı Öder)",
        5 => "Şartlı Kargo Ücretsiz (Satıcı Öder)",
    ];

    const CURRENCY = [
        'try' => 1,
        'usd' => 2,
        'eur' => 3,
    ];

    protected N11Client $client;

    public function __construct()
    {
        $this->client = app(N11Client::class);
    }

    public function syncOrders()
    {
        $orders = $this->client->order->orderList([
            'searchData' => [
                'status' => 'Completed',
            ],
            'pagingData' => [
                // Şuanki Sayfa
                'currentPage' => 0,
                // Gösterilecek nesne
                'pageSize' => 20
            ]
        ]);
        if ($orders->result->status === "success") {
            foreach ($orders->orderList->order as $order) {
                $info = $this->client->order->orderDetail($order->id);
                if ($info->result->status === "success") {
                    $price = 0;

                    foreach ($info->orderDetail->itemList as $item) {
                        $price += $item->sellerInvoiceAmount;
                    }

                    MerchantOrder::create([
                        'merchant' => 'n11',
                        'merchant_id' => $order->id,
                        'number' => $order->id,
                        'client' => $info->orderDetail->buyer,
                        'data' => $info->orderDetail,
                        'price' => $price,
                        'date' => self::convertTime($info->orderDetail->createDate),
                        'status' => self::STATUS[$info->orderDetail->status],
                    ]);
                }
            }
        }
    }

    public static function convertTime($date): string
    {
        $format = "d/m/Y H:i";
        $dateTimeObj = \DateTime::createFromFormat($format, $date);
        return $dateTimeObj->format('Y-m-d H:i:s');
    }

    public static function getClientOutput($client): array
    {
        return [
            'full_name' => $client['fullName'],
            'email' => $client['email'],
            'identity' => $client['tcId'],
            'tax_office' => $client['taxOffice'],
            'tax_id' => $client['taxId'],
        ];
    }

    public function setStock($id, $stock)
    {
        $this->client->stock->UpdateStockByStockIdRequest($id, $stock);
    }

    public function updateProduct(Product $product)
    {
        $price = number_format($product->price->price, 2, '.', '');
        $this->client->product->SaveProduct(["product" => [
            'productSellerCode' => $product->sku,
            'title' => $product->title,
            'subtitle' => $product->sub_title,
            'description' => $product->description,
//                'domestic' => 'false',
            'category' => $product->categories()->pluck("id")->map(fn($id) => ['id' => $id])->toArray(),
//            'specialProductInfoList' => [
//                'specialProductInfo' => [
//                    'key' => '?',
//                    'value' => '?',
//                ]
//            ],
            'price' => $price,
            'currencyType' => self::CURRENCY[$product->price->currency],
            'images' => [
                'image' =>
                    $product->images->map(fn(Image $image, int $key) => [
                        'url' => $image->url,
                        'order' => $key,
                    ])->toArray()
            ],
            'approvalStatus' => $product->status,
            'attributes' => [
                "attribute" => [
                    "name" => "Marka",
                    "value" => $product->brand->name
                ]
            ],
//                'productionDate' => '',
//                'expirationDate' => '',
            'productCondition' => 1, // Yeni (2. el değil)
            'preparingDay' => 3,
//            'discount' => [
//                'startDate' => '',
//                'endDate' => '',
//                'type' => '',
//                'value' => '',
//            ],
            'shipmentTemplate' => 'termos',
            'stockItems' => [
                'stockItem' => [
                    [
//                        'bundle' => 'false',
//                        'mpn' => '112',
//                        'gtin' => '0190198066473',
                        'oem' => '',
                        'quantity' => $product->quantity,
//                        'n11CatalogId' => '',
                        'sellerStockCode' => $product->sku,
                        'optionPrice' => $price,
//                        'attributes' => [
//                            'attribute' => [
//                                [
//                                    'name' => 'Sezon',
//                                    'value' => '2013 Sonbahar-Kış'
//                                ],
//                                [
//                                    'name' => 'Cinsiyet',
//                                    'value' => 'Erkek',
//                                ],
//                            ]
//                        ]
                    ]
                ]
            ],
            'maxPurchaseQuantity' => $product->quantity,
        ]]);
    }

    public function updateOrder(MerchantOrder $order)
    {
        // TODO: Implement updateOrder() method.
    }

    public function updateDeliveryCode($id, $code)
    {
        // ???
    }

    public function createProduct(Product $product)
    {
        $this->updateProduct($product);

        ProductMerchant::create([
            'merchant' => "n11",
            'merchant_id' => $product->sku,
            'product_id' => $product->id
        ]);
    }

    public function getCategories()
    {
        return $this->client->category->GetTopLevelCategories([]);
    }

    public function getCategoryAttributes($categoryId)
    {
        return $this->client->category->GetCategoryAttributes([
            "categoryId" => $categoryId
        ]);
    }

    public function getCargoCompanies()
    {
        $this->client->shipmentCompany->GetShipmentCompanies([]);
    }

    public function getBrands()
    {
        // marka yok katalog var
    }

    public function getOrders()
    {
        return $this->client->order->DetailedOrderList([]);
    }

    public function approveOrder(MerchantOrder $order)
    {
        $this->client->order->OrderItemAccept([
            "orderItem" => [
                "id" => $order->merchant_id
            ]
        ]);
    }

    public function declineOrder(MerchantOrder $order, string $reason, OrderRejectReasonType $reasonType)
    {
        $this->client->order->OrderItemReject([
            "orderItemList" => [
                "orderItem" => [
                    "id" => $order->merchant_id
                ]
            ],
            "rejectReason" => $reason,
            "rejectReasonType" => $reasonType === OrderRejectReasonType::OUT_OF_STOCK ? "OUT_OF_STOCK" : "OTHER",
            // ternary kullanmamın sebebi eğer OrderRejectReasonType'ye farklı değerler eklenirse onların OTHER olarak gitmesi
        ]);
    }

    public function refundedOrders()
    {
        return $this->client->order->DetailedOrderList([
            "searchData" => [
                "status" => "Claimed"
            ]
        ]);
    }

    public function aprroveRefundedOrder(MerchantOrder $order, $id = null)
    {
        $this->client->return->ClaimReturnApprove([
            "claimReturnId" => $id
        ]);

        // $order->status = "refundApproved" ???
    }

    public function getClaims()
    {
        return $this->client->return->ClaimReturnList([]);
    }

    public function declineRefundedOrder($claimReturnId, $denyReasonId, $denyReasonNote)
    {
        return $this->client->return->ClaimReturnDeny([
            "claimReturnId" => "",
            "denyReasonId" => "",
            "denyReasonNote" => "",
        ]);
    }

    public function getQuestions()
    {
        return $this->client->product->GetProductQuestionList([
            "currentPage" => 0,
            "pageSize" => 100
        ]);
    }

    public function sendQuestionAnswer(MerchantOrder $question, string $answer)
    {
        $this->client->product->SaveProductAnswer([
            "productQuestionId" => $question->merchant_id,
            "productAnswer" => $answer
        ]);
    }

    public function deleteProduct(Product $product)
    {
        $this->client->product->DeleteProductBySellerCode([
            "productSellerCode" => $product->sku
        ]);
    }

    public function getProductList()
    {
        return $this->client->product->getProductList();
    }

    public function setPrice(Product $product, $salePrice, $listPrice)
    {
        // TODO: Implement setPrice() method.
    }
}
