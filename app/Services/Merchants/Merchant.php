<?php

namespace App\Services\Merchants;

use App\Enums\OrderRejectReasonType;
use App\Models\MerchantOrder;
use App\Models\Product;

interface Merchant
{
    public function setStock(Product $product, $stock);

    public function updatePrice(Product $product);

    public function updateProduct(Product $product);

    public function updateOrder(MerchantOrder $order);

    public function updateDeliveryCode($id, $code);

    public function createProduct(Product $product);

    public function getCategories();

    public function getCategoryAttributes($categoryId);

    public function getCargoCompanies();

    public function getBrands();

    public function getOrders();

    public function approveOrder(MerchantOrder $order);

    public function declineOrder(MerchantOrder $order, string $reason, OrderRejectReasonType $reasonType);

    public function refundedOrders();

    public function aprroveRefundedOrder(MerchantOrder $order);

    public function declineRefundedOrder($claimReturnId, $denyReasonId, $denyReasonNote); // ???

    public function getQuestions();

    public function sendQuestionAnswer(MerchantOrder $question, string $answer);

    public function deleteProduct(Product $product);

    public function syncOrders();
}
