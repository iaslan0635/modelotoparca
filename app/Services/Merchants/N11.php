<?php

namespace App\Services\Merchants;

use App\Models\MerchantOrder;
use App\Models\Product;
use IS\PazarYeri\N11\N11Client;

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

    public static function orders()
    {
        $client = new N11Client();
        $client->setApiKey('604ab86f-4110-48d8-8d77-38ddaf80942b');
        $client->setApiPassword('qYKHdp9c1GYe9laI');
        $orders = $client->order->orderList([
            'status' => 'Completed',
            'pagingData' => [
                // Şuanki Sayfa
                'currentPage' => 0,
                // Gösterilecek nesne
                'pageSize' => 20
            ]
        ]);
        if ($orders->result->status === "success") {
            foreach ($orders->orderList->order as $order) {
                $info = $client->order->orderDetail($order->id);
                if ($info->result->status === "success") {
                    $price = 0;

                    foreach ($info->orderDetail->itemList as $item){
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

    public function getAuthenticationInfo()
    {
        // TODO: Implement getAuthenticationInfo() method.
    }

    public function setAuthenticationInfo(array $info)
    {
        // TODO: Implement setAuthenticationInfo() method.
    }

    public function setStock($id, $stock)
    {
        $client = new N11Client();
        $client->setApiKey('604ab86f-4110-48d8-8d77-38ddaf80942b');
        $client->setApiPassword('qYKHdp9c1GYe9laI');
        return $client->stock->UpdateStockByStockIdRequest($id, $stock);
    }

    public function updateProduct(Product $product)
    {
        // TODO: Implement updateProduct() method.
    }

    public function updateOrder(MerchantOrder $order)
    {
        // TODO: Implement updateOrder() method.
    }

    public function updateDeliveryCode()
    {
        // TODO: Implement updateDeliveryCode() method.
    }

    public function createPorudct(Product $product)
    {
        // TODO: Implement createPorudct() method.
    }

    public function getCategories()
    {
        // TODO: Implement getCategories() method.
    }

    public function getCategoryAttributes()
    {
        // TODO: Implement getCategoryAttributes() method.
    }

    public function getCargoCompanies()
    {
        // TODO: Implement getCargoCompanies() method.
    }

    public function getBrands()
    {
        // TODO: Implement getBrands() method.
    }

    public function getOrders()
    {
        // TODO: Implement getOrders() method.
    }

    public function approveOrder(MerchantOrder $order)
    {
        // TODO: Implement approveOrder() method.
    }

    public function declineOrder(MerchantOrder $order)
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

    public function declineRefundedOrder(MerchantOrder $order)
    {
        // TODO: Implement declineRefundedOrder() method.
    }

    public function getQuestions()
    {
        // TODO: Implement getQuestions() method.
    }

    public function sendQuestionAnswer(MerchantOrder $question)
    {
        // TODO: Implement sendQuestionAnswer() method.
    }

    public function deleteProduct(Product $product)
    {
        // TODO: Implement deleteProduct() method.
    }

    public function getProductList()
    {
        $client = new N11Client();
        $client->setApiKey('604ab86f-4110-48d8-8d77-38ddaf80942b');
        $client->setApiPassword('qYKHdp9c1GYe9laI');

        return $client->product->getProductList();
    }
}
