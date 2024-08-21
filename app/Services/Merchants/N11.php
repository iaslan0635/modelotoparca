<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Facades\Helper;
use App\Facades\N11Client\N11Client;
use App\Facades\N11Client\N11ClientException;
use App\Facades\TTL;
use App\Models\MerchantOrder;
use App\Models\Product;
use App\Models\ProductMerchant;
use App\Models\ProductMerchantAttribute;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Collection;

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
        14 => 'Other',
    ];

    const STATUS = [
        1 => 'İşlem Bekliyor',
        2 => 'İşlemde',
        3 => 'İptal Edilmiş',
        4 => 'Geçersiz',
        5 => 'Tamamlandı',
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
        17 => 'Tamamlandıktan Sonra İade',
    ];

    const SERVICE_ITEM_TYPE = [
        1 => 'Ürün Sipariş Kalemi',
        2 => 'Servis Sipariş Kalemi',
        3 => 'Gsm Sipariş Kalemi',
        4 => 'Gezi Sipariş Kalemi',
    ];

    const INVOICE_TYPE = [
        1 => 'Bireysel',
        2 => 'Kurumsal',
    ];

    const DELIVERY_FEE_TYPE = [
        1 => 'N11 Öder',
        2 => 'Alıcı Öder',
        3 => 'Mağaza Öder',
        4 => 'Şartlı Kargo (Alıcı Öder)',
        5 => 'Şartlı Kargo Ücretsiz (Satıcı Öder)',
    ];

    const CURRENCY = [
        'try' => 1,
        'usd' => 2,
        'eur' => 3,
    ];

    const DISCOUNT_TYPE = [
        'fixed' => 1,
        'percentile' => 2,
    ];

    protected N11Client $client;

    public function __construct()
    {
        $this->client = app(N11Client::class);
    }

    private function getPrice(Product $product)
    {
        $comission = merchant_setting('n11', 'comission', 0);

        return $product->price->listingPrice()
            ->addComission($comission)
            ->numberFormat(2, '.', '');
    }

    public function syncOrders()
    {
        $orders = $this->client->order->orderList([
            'searchData' => [
                'status' => 'Completed',
                'buyerName' => '',
                'orderNumber' => '',
                'recipient' => '',
                'period' => '',
                'sortForUpdateDate' => '',
            ],
            'pagingData' => [
                // Şuanki Sayfa
                'currentPage' => 0,
                // Gösterilecek nesne
                'pageSize' => 20,
            ],
        ]);
        if ($orders->result->status === 'success') {
            foreach ($orders->orderList->order as $order) {
                $info = $this->client->order->orderDetail([
                    'orderRequest' => [
                        'id' => $order->id,
                    ],
                ]);
                if ($info->result->status === 'success') {
                    $price = 0;

                    foreach ($info->orderDetail->itemList as $item) {
                        $price += $item->sellerInvoiceAmount;
                    }

                    MerchantOrder::updateOrCreate([
                        'merchant' => 'n11',
                        'merchant_id' => $order->id,
                    ], [
                        'number' => $order->id,
                        'client' => [
                            'id' => $info->orderDetail->buyer->id,
                            'name' => $info->orderDetail->buyer->fullName,
                        ],
                        'data' => $info->orderDetail,
                        'price' => $price,
                        'date' => self::convertTime($info->orderDetail->createDate),
                        'status' => self::STATUS[$info->orderDetail->status],
                        'lines' => array_map(fn ($line) => [
                            'sku' => $line->productSellerCode,
                            'quantity' => $line->quantity,
                            'price' => $line->price,
                        ], $info->itemList),
                        'line_data' => [],
                    ]);
                }
            }
        }
    }

    public static function convertTime($date): string
    {
        $format = 'd/m/Y H:i';
        $dateTimeObj = \DateTime::createFromFormat($format, $date);

        return $dateTimeObj->format('Y-m-d H:i:s');
    }

    public function parseOrder(MerchantOrder $order): array
    {
        $parseItem = fn ($item) => [
            'id' => $item['id'],
            'productId' => $item['productId'],
            'status' => $item['status'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'sellerDiscount' => $item['sellerDiscount'],
            'mallDiscount' => $item['mallDiscount'],
            'commission' => $item['commission'],
            'sellerInvoiceAmount' => $item['sellerInvoiceAmount'],
            'productName' => $item['productName'],
            'shippingDate' => $item['shippingDate'],
            'shipmenCompanyCampaignNumber' => $item['shipmenCompanyCampaignNumber'],
            'cargo' => [
                'shipmentCompany' => $item['shipmentInfo']['shipmentCompany']['name'],
                'trackingNumber' => $item['shipmentInfo']['trackingNumber'],
                'shipmentCode' => $item['shipmentInfo']['shipmentCode'],
                'campaignNumber' => $item['shipmentInfo']['campaignNumber'],
                'shipmentMethod' => $item['shipmentInfo']['shipmentMethod'],
                'campaignNumberStatus' => $item['shipmentInfo']['campaignNumberStatus'],
            ],
        ];

        $data = $order->data;

        return [
            'client' => [
                'full_name' => $data['buyer']['fullName'],
                'email' => $data['buyer']['email'],
                'identity' => $data['buyer']['tcId'],
                'tax_office' => $data['buyer']['taxOffice'],
                'tax_id' => $data['buyer']['taxId'],
            ],
            'invoiceAddress' => [
                'address' => $data['billingAddress']['address'],
                'city' => $data['billingAddress']['city'],
                'district' => $data['billingAddress']['district'],
                'fullName' => $data['billingAddress']['fullName'],
            ],
            'items' => array_map($parseItem, $data['itemList']),
        ];
    }

    public function setStock(Product $product, $stock)
    {
        $this->client->stock->UpdateStockByStockIdRequest($product->id, $stock);
    }

    public function sendProduct(Product $product)
    {
        $images = $product->imageUrls()->whenEmpty(fn (Collection $self) => $self->push($product->imageUrl()))->values();

        $attrs = ProductMerchantAttribute::query()
            ->where('merchant', '=', 'n11')
            ->where('product_id', '=', $product->id)
            ->get()
            ->map(fn (ProductMerchantAttribute $p) => [
                'name' => $p->merchant_id,
                'value' => $p->merchant_value,
            ]);

        $price = $this->getPrice($product);
        $response = $this->client->product->SaveProduct([
            'product' => [
                'productSellerCode' => $product->sku,
                'title' => $product->title.' '.$product->sub_title,
                'subtitle' => $product->sub_title,
                'description' => $product->description,
                'domestic' => 'false',
                'category' => [
                    'id' => $product->categories[0]->merchants()
                        ->where('merchant', '=', 'n11')->valueOrFail('merchant_id'),
                ],
                'price' => $price,
                'discount' => [
                    'startDate' => '', // $product->price->discount_start_at,
                    'endDate' => '', // $product->price->discount_end_at,
                    'type' => '', // self::DISCOUNT_TYPE[$product->price->discount_type],
                    'value' => '', // $product->price->discount_amount,
                ],
                'currencyType' => self::CURRENCY['try'], // Bütün pazaryerlerine TL göndereceğiz
                'approvalStatus' => $product->status,
                'attributes' => [
                    [
                        'name' => 'Marka',
                        'value' => $product->brand->name,
                    ],
                    ...$attrs,
                ],
                'productCondition' => 1, // Yeni (2. el değil)
                'preparingDay' => 3,
                'shipmentTemplate' => 'Merkez Şube11',
                'images' => [
                    'image' => $images->map(fn (string $image, int $order) => [
                        'url' => $image,
                        'order' => $order,
                    ])->toArray(),

                ],
                'stockItems' => [
                    'stockItem' => [
                        'images' => [
                            'image' => $images->map(fn (string $image, int $order) => [
                                'url' => $image,
                                'order' => $order,
                            ])->toArray(),

                        ],
                        'oem' => '',
                        'quantity' => $product->quantity,
                        'sellerStockCode' => $product->sku,
                        'optionPrice' => $price,
                        'n11CatalogId' => '',
                        'attributes' => '',
                    ],
                ],
                'unitInfo' => '',
                'sellerNote' => '',
                'maxPurchaseQuantity' => $product->quantity,
                'groupAttribute' => '',
                'groupItemCode' => '',
                'itemName' => '',
                'productionDate' => '',
                'expirationDate' => '',
            ],
        ], [
            'throw' => false,
        ]);

        if (
            $response->result->status !== 'success' &&
            $response->result->errorCode !== 'SELLER_API.catalog.suggest.failed.alreadySuggested'
        ) {
            throw new N11ClientException($response);
        }

        try {
            ProductMerchant::create([
                'merchant' => 'n11',
                'merchant_id' => $product->sku,
                'product_id' => $product->id,
            ]);
        } catch (UniqueConstraintViolationException) {
        }
    }

    public function updateOrder(MerchantOrder $order)
    {
        // TODO: Implement updateOrder() method.
    }

    public function updateDeliveryCode($id, $code)
    {
        // ???
    }

    public function getCategories()
    {
        return $this->client->category->GetTopLevelCategories([]);
    }

    public function getSubCategories($categoryId, $lastModifiedDate)
    {
        return $this->client->category->GetSubCategories(['categoryId' => $categoryId, 'lastModifiedDate' => $lastModifiedDate]);
    }

    public function getCategoryAttributes($categoryId)
    {
        return \Cache::remember($categoryId, TTL::WEEK,
            fn () => $this->client->category->GetCategoryAttributes([
                'categoryId' => $categoryId,
                'pagingData' => [
                    'currentPage' => 0,
                    'pageSize' => 100,
                ],
            ])
        );

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
            'orderItem' => [
                'id' => $order->merchant_id,
            ],
        ]);
    }

    public function declineOrder(string $lineId, OrderRejectReasonType $reasonType, string $shipmentPackageId, int $quantity)
    {
        $this->client->order->OrderItemReject([
            'orderItemList' => [
                'orderItem' => [
                    'id' => $lineId,
                ],
            ],
            'rejectReason' => $quantity,
            'rejectReasonType' => $reasonType === OrderRejectReasonType::OUT_OF_STOCK ? 'OUT_OF_STOCK' : 'OTHER',
            // ternary kullanmamın sebebi eğer OrderRejectReasonType'ye farklı değerler eklenirse onların OTHER olarak gitmesi
        ]);
    }

    public function refundedOrders()
    {
        return $this->client->order->DetailedOrderList([
            'searchData' => [
                'status' => 'Claimed',
            ],
        ]);
    }

    public function aprroveRefundedOrder(MerchantOrder $order, $id = null)
    {
        $this->client->return->ClaimReturnApprove([
            'claimReturnId' => $id,
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
            'claimReturnId' => '',
            'denyReasonId' => '',
            'denyReasonNote' => '',
        ]);
    }

    public function getQuestions()
    {
        return $this->client->product->GetProductQuestionList([
            'currentPage' => 0,
            'pageSize' => 100,
        ]);
    }

    public function sendQuestionAnswer(MerchantOrder $question, string $answer)
    {
        $this->client->product->SaveProductAnswer([
            'productQuestionId' => $question->merchant_id,
            'productAnswer' => $answer,
        ]);
    }

    public function deleteProduct(Product $product)
    {
        $this->client->product->DeleteProductBySellerCode([
            'productSellerCode' => $product->sku,
        ]);
    }

    public function getProductList()
    {
        return $this->client->product->getProductList();
    }

    public function updatePrice(Product $product)
    {
        return $this->client->product->UpdateProductPriceBySellerCode([
            'productSellerCode' => $product->sku,
            'price' => $this->getPrice($product),
        ]);
    }

    public function productExists(Product $product): string
    {
        try {
            $status = $this->client->product->GetProductBySellerCode([
                'sellerCode' => $product->sku,
            ])->product->saleStatus;

            return Helper::getN11EnumStatuses($status)->turkish;
        } catch (N11ClientException $exception) {
            return 'N11 bağlanamadı!';
        }
    }

    public function syncQuestions()
    {
        // TODO: Implement syncQuestions() method.
    }
}
