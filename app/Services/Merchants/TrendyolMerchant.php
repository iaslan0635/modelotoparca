<?php

namespace App\Services\Merchants;

use App\Models\Product;
use GuzzleHttp\Client;

class TrendyolMerchant implements Merchant
{
    public const name = 'Trendyol';

    public string $key = 'trendyol';

    protected Client $client;

    public function __construct(
        protected string $username,
        protected string $password
    ) {
        $this->client = new Client([
            'baseUrl' => '...',
        ]);
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

    }

    public function getOrders()
    {
        $request = $this->client->get();

        return [
            'merchant' => $this->name,
            'merchant_id' => 1564456,
            'number' => '13249813232',
            'client' => [],
            'data' => [],
            'price' => 100,
            'date' => '10.06.2023',
            'status' => 'completed',
            'delivery_status' => 'processing',
            'payment_status' => 'pending',
            'lines' => [
                [
                    'quantity' => 2,
                    'product_name' => 'Efe',
                    'amount' => 10,
                    'price' => 5,
                ],
            ],
            'line_data' => [],
        ];
    }

    public function getQuesntions()
    {
        return [
            'merchant' => $this->name,
            'merchant_id' => 1564456,
            'customer_fullname' => 'Ad Soyad',
            'date' => 'Datetime',
            'conversation' => [
                'type' => 'question',
                'text' => 'asddasdassad',
            ],
            'data' => [],
        ];
    }

    public function updateProduct(Product $product)
    {
        $request = $this->client->get();
    }

    public function updateOrder(TODO $order)
    {
        $request = $this->client->get();
    }

    public function updateDeliveryCode()
    {

    }
}
