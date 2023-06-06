<?php

namespace App\Services\Merchants;

use App\Models\MerchantOrder;
use App\Models\Product;

interface Merchant
{
    public function getAuthenticationInfo();

    public function setAuthenticationInfo(array $info);

    public function setStock(Product $product, $stock);

    public function updateProduct(Product $product);

    public function updateOrder(MerchantOrder $order);

    public function updateDeliveryCode();

    public function createPorudct(Product $product);

    public function getCategories();
    public function getCategoryAttributes();

    public function getCargoCompanies();

    public function getBrands();

    public function getOrders();

    public function approveOrder(MerchantOrder $order);

    public function declineOrder(MerchantOrder $order);

    public function refundedOrders();

    public function aprroveRefundedOrder(MerchantOrder $order);

    public function declineRefundedOrder(MerchantOrder $order);

    public function getQuestions();

    public function sendQuestionAnswer(MerchantOrder $question);

    public function deleteProduct(Product $product);
}
