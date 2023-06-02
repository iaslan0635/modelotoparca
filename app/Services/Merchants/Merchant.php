<?php

namespace App\Services\Merchants;

use App\Models\Product;

interface Merchant
{
    public function getAuthenticationInfo();

    public function setAuthenticationInfo(array $info);

    public function setStock(Product $product, $stock);

    public function updateProduct(Product $product);

    public function updateOrder(TODO $order);

    public function updateDeliveryCode();

    public function createPorudct(Product $product);

    public function getCategories();
    public function getCategoryAttributes();

    public function getCargoCompanies();

    public function getBrands();

    public function getOrders();

    public function approveOrder(TODO $order);

    public function declineOrder(TODO $order);

    public function refundedOrders();

    public function aprroveRefundedOrder(TODO $order);

    public function declineRefundedOrder(TODO $order);

    public function getQuestions();

    public function sendQuestionAnswer(TODO $question);

    public function deleteProduct(Product $product);
}
