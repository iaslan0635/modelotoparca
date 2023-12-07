<?php

namespace App\Http\Controllers;

use App\Models\MerchantOrder;
use App\Services\MarketPlace;
use Illuminate\Http\Request;

class MerchantOrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = MerchantOrder::query();

        if ($request->has('merchant')) {
            $orders->where('merchant', '=', $request->input('merchant'));
        }

        $orders = $orders->orderByDesc('id')->paginate(10);
        return view('admin.apps.marketplace.orders', compact('orders'));
    }

    public function show(MerchantOrder $order)
    {
        $data = MarketPlace::parseOrder($order);
        return view('admin.apps.marketplace.order_show', compact('order', 'data'));
    }
}
