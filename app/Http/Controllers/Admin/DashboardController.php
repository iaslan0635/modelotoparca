<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MerchantOrder;
use App\Models\Order;
use App\Models\ProductMerchant;
use App\Services\MarketPlace;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view("admin.inhouse.dashboard", [
            "productsFromMerchants" => $this->productsFromMerchants(),
            "orders" => $this->orders(),
            "merchantOrders" => $this->merchantOrders(),
        ]);
    }

    private function productsFromMerchants()
    {
        $result = [];

        foreach (MarketPlace::MERCHANTS as $merchant) {
            $result[$merchant] = ProductMerchant::with("product")
                ->where("merchant", $merchant)
                ->latest("updated_at")
                ->limit(5)
                ->get(["id", "product_id"])
                ->pluck("product");
        }

        return $result;
    }

    private function orders()
    {
        return Order::with(["user", "items"])->latest()->limit(7)->get();
    }

    private function merchantOrders()
    {
        return MerchantOrder::latest()->limit(7)->get();
    }
}
