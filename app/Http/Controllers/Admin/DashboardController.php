<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MerchantOrder;
use App\Models\Order;
use App\Models\Product;
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
            $result[$merchant] = Product::whereHas("merchants", function ($query) use ($merchant) {
                $query->where("merchant", $merchant)
                    ->latest("updated_at")
                    ->limit(5);
            })->get();
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
