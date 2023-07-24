<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(Request $request)
    {
        $orders = Order::query()->with(['user', 'items']);

        if ($request->has('type')){
            $orders->where('payment_status', '=', $request->input('type'));
        }

        $orders = $orders->orderByDesc('id')->paginate(10);

        return view('admin.apps.ecommerce.sales.listing', compact('orders'));
    }
}
