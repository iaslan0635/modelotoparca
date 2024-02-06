<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MerchantOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductMerchant;
use App\Models\User;
use App\Services\MarketPlace;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view("admin.inhouse.dashboard", [
            "productsFromMerchants" => $this->productsFromMerchants(),
            "orders" => $this->orders(),
            "merchantOrders" => $this->merchantOrders(),
            "productStats" => $this->productStats(),
            "latestUser" => $this->latestUser(),
        ]);
    }

    private function productsFromMerchants()
    {
        $result = [];

        foreach (MarketPlace::MERCHANTS as $merchant) {
            $result[$merchant] = ProductMerchant::with("product", "product.price")
                ->where("merchant", $merchant)
                ->latest("updated_at")
                ->limit(4)
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

    private function productStats()
    {
        $total = Product::count();
        $active = Product::where("status", 1)->count();
        return [
            "total" => $total,
            "active" => $active,
            "activePercent" => $total ? round(($active / $total) * 100) : 0,
        ];
    }
    private function latestUser()
    {
        return User::latest()->take(8)->get();
    }
}
