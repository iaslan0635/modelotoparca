<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatuses;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
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
        $order = Cart::newOrder(
            $request->input('checkout_payment_method'),
            $address->id,
            $address->id,
            $address,
            $address
        );

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

    public function review(Request $request, $order)
    {
        $data = $request->validate([
            'product_id' => ['required'],
            'rating' => ['required'],
            'content' => ['required']
        ]);
        $data['user_id'] = auth()->id();

        $order = Order::where('id', '=', $order)
            ->where('user_id', '=', auth()->id())
            ->firstOrFail();

        if ($order->status !== OrderStatuses::COMPLETED){
            return back()->with('error', 'Siparişiniz tamamlanmadan yorum yapamazsınız!');
        }

        $product_exists = $order->items->contains('product_id', '=', $request->input('product_id'));

        if (!$product_exists){
            return back()->with('error', 'Satın almadığınız ürüne yorum yapamazsınız!');
        }

        $exists = Review::query()
            ->where('product_id', '=', $request->input('product_id'))
            ->where('user_id', '=', auth()->id())
            ->exists();

        if ($exists) {
            return back()->with('error', 'Aynı ürüne 2 kez yorum yapamazsınız!');
        }

        $product = Product::findOrFail($request->input('product_id'));
        $product->reviews()->create($data);

        return back()->with('success', 'Yorumunuz başarıyla eklendi!');
    }
}
