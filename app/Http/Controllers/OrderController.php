<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatuses;
use App\Models\Order;
use App\Packages\Cart;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class OrderController extends Controller
{
    public function complete(Request $request)
    {
        $request->validate([
            'order_agreement' => 'required',
        ]);

        if (count(auth()->user()->addresses) === 0) {
            return redirect()->route('add-adress');
        }

        $address = auth()->user()->addresses[0];
        $order = auth()->user()->orders()->create([
            'payment_method' => $request->input('checkout_payment_method'),
            'shipment_address_id' => $address->id,
            'invoice_address_id' => $address->id,
            'payment_status' => OrderStatuses::PENDING,
            'shipment_status' => OrderStatuses::PENDING,
            'original_data' => [
                'shipment_address' => $address,
                'invoice_address' => $address,
                'user' => auth()->user(),
            ],
        ]);

        foreach (Cart::getItems() as $item) {
            $order->items()->create([
                'product_id' => $item->model->id,
                'tax_id' => $item->model->price->tax?->id,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'product_data' => $item->model,
                'tax_data' => $item->model->price->tax,
                'price_data' => $item->model->price,
            ]);
        }

        Cart::clear();

        return redirect()->route('order-success')->with('order_number', $order->id);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function success()
    {
        $order = Order::with(['items.product.price', 'user.addresses'])->findOrFail(session()->get('order_number'));

        return view('account.order-success', compact('order'));
    }

    public function detail(Order $order)
    {
        $order->load('items.product.price');

        return view('account.order-details', compact('order'));
    }

    public function history()
    {
        $orders = Order::where('user_id', auth()->id())->orderByDesc('id')->paginate(5);

        return view('account.order-history', compact('orders'));
    }

    public function cancel()
    {
        $order = Order::findOrFail(request()->input('order_id'));
        $order->payment_status = OrderStatuses::CANCELLED;
        $order->save();
    }
}
