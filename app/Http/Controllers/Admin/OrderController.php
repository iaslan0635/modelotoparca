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

        if ($request->has('type')) {
            $orders->where('status', '=', $request->input('type'));
        }

        $orders = $orders->orderByDesc('id')->paginate(10);

        return view('admin.apps.ecommerce.sales.listing', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load(['user.addresses', 'invoiceAddress', 'shipmentAddress', 'items.product']);

        return view('admin.apps.ecommerce.sales.details', compact('order'));
    }

    public function edit(Order $order)
    {
        $order->load(['user.addresses', 'invoiceAddress', 'shipmentAddress', 'items.product']);

        return view('admin.apps.ecommerce.sales.edit-order', compact('order'));
    }

    public function update(Order $order, Request $request)
    {
        $order->update([
            'status' => $request->input('status'),
        ]);

        return back();
    }

    public function declineOrder(Order $order, string $lineId, string $reasonType)
    {
        return 'Not implemented';
    }
}
