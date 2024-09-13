<?php

namespace App\Packages;

use App\Enums\OrderStatuses;
use App\Models\Discount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Cart
{
    public static function addItem($name, $price, $quantity, $attributes, $model): void
    {
        $items = Session::get('cart.items', []);
        $itemIndex = (new Cart)->findItemIndex($name, $attributes); // Aynı ürünü sepetin içinde arar

        if ($itemIndex === null) {
            // Eğer ürün sepette yoksa, yeni bir öğe olarak ekle
            $itemId = uniqid();
            $itemWithId = [
                'id' => $itemId,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'attributes' => $attributes,
                'model' => $model,
            ];
            $items[] = $itemWithId;
        } else {
            // Eğer ürün sepette varsa, miktarını artır
            $item = $items[$itemIndex];
            $item['quantity'] += $quantity;
            $items[$itemIndex] = $item;
        }

        Session::put('cart.items', $items);
    }

    public static function findItemIndexById($itemId): ?int
    {
        foreach (session('cart.items', []) as $index => $item) {
            if ($item['id'] === $itemId) {
                return $index;
            }
        }

        return null;
    }

    public function findItemIndex($name, $attributes = []): ?int
    {
        foreach (session('cart.items', []) as $index => $item) {
            if ($item['name'] === $name && $item['attributes'] === $attributes) {
                return $index;
            }
        }

        return null;
    }

    public static function removeItem($itemId): void
    {
        $items = Session::get('cart.items', []);

        foreach ($items as $index => $item) {
            if ($item['id'] === $itemId) {
                dd(self::getDiscounts());
                if (isset(self::getDiscounts()['data']) && $item['model']->id === self::getDiscounts()['data']['product_id']){
                    Session::forget('cart.coupon');
                }
                unset($items[$index]);
                break;
            }
        }

        Session::put('cart.items', $items);
    }

    public static function updateItem($itemId, $newQuantity): void
    {
        $items = Session::get('cart.items', []);
        $itemIndex = Cart::findItemIndexById($itemId);

        if ($itemIndex !== null) {
            if ($newQuantity == 0) {
                unset($items[$itemIndex]);
            } else {
                $items[$itemIndex]['quantity'] = $newQuantity;
            }
        }

        Session::put('cart.items', $items);
    }

    public static function updateItemPrice($itemId, $price): void
    {
        $items = Session::get('cart.items', []);
        $itemIndex = Cart::findItemIndexById($itemId);

        if ($itemIndex !== null) {
            $items[$itemIndex]['price'] = $price;
        }

        Session::put('cart.items', $items);
    }

    public static function subTotal(): float|int
    {
        $items = Session::get('cart.items', []);
        $subTotal = 0;

        foreach ($items as $item) {
            if (isset($item['price'])) {
                $subTotal += $item['price'] * $item['quantity'];
            } elseif (isset($item['attributes']['price'])) {
                $subTotal += $item['attributes']['price'] * $item['quantity'];
            }
        }

        return $subTotal;
    }

    public static function getDiscounts()
    {
        if (Session::has('cart.coupon')) {
            $discount = Discount::query()->where('coupon', '=', Session::get('cart.coupon'))->first();

            return [
                'amount' => $discount->amount,
                'type' => $discount->type,
                'data' => $discount->data
            ];
        }

        return [
            'amount' => 0,
            'type' => "amount"
        ];
    }

    public static function addCoupon(string $coupon)
    {
        $discount = Discount::query()->where('coupon', '=', $coupon)->first();

        if (!$discount) {
            return false;
        }

        Session::put('cart.coupon', $coupon);

        return true;
    }

    public static function newOrder($payment_method, $shipment_address_id, $invoice_address_id, $shipment_address, $invoice_address)
    {
        $result = DB::transaction(function () use ($invoice_address, $shipment_address, $invoice_address_id, $shipment_address_id, $payment_method) {
            $data = [
                'payment_method' => $payment_method,
                'shipment_address_id' => $shipment_address_id,
                'invoice_address_id' => $invoice_address_id,
                'status' => OrderStatuses::PENDING,
                'total_amount' => self::getTotal(),
                'original_data' => [
                    'shipment_address' => $shipment_address,
                    'invoice_address' => $invoice_address,
                    'user' => auth()->user(),
                ],
            ];

            if (Session::has('cart.coupon')) {
                $discount = Discount::query()->where("rule", "cart")->where('coupon', '=', Session::get('cart.coupon'))->first();
                $data['discount_id'] = $discount->id;
                $data['original_data']['discount'] = $discount;
            }
            $order = auth()->user()->orders()->create($data);

            foreach (self::getItems() as $item) {
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

            return $order;
        });

        self::clear();
        return $result ?? false;
    }

    public static function getTotal(): float|int
    {
        $total = self::subTotal();

        $total += (new Cart)->getTotalWithTax();

        $total += (new Cart)->getTotalWithShipping();

        $discount = self::getDiscounts();

        if ($discount['type'] === "amount") {
            $total = bcsub($total, $discount['amount'], 2);
        } else {
            $total = bcmul($total, $discount['amount'], 2);
        }

        if (count(self::getItems()) === 0) {
            return 0;
        }

        return $total;
    }

    public static function getItems(): array
    {
        $items = Session::get('cart.items', []);
        $cartItems = [];

        foreach ($items as $item) {
            $cartItem = new CartItem(
                $item['id'],
                $item['name'],
                $item['quantity'],
                $item['price'],
                $item['attributes'],
                $item['model'] ?? []
            );

            $cartItems[] = $cartItem;
        }

        return $cartItems;
    }

    public static function addShippingCost($shippingCost): void
    {
        session(['cart.shippingCost' => $shippingCost]);
    }

    public static function addTax($taxRate): void
    {
        session(['cart.taxRate' => $taxRate]);
    }

    public static function getTotalWithTax(): float|int
    {
        $total = self::subTotal();

        $taxRate = session('cart.taxRate');
        if (!is_null($taxRate)) {
            return $total * $taxRate / 100;
        }

        return 0;
    }

    public static function getTotalWithShipping(): float|int
    {
        $shippingCost = session('cart.shippingCost');
        if (count(self::getItems()) === 0) {
            return 0;
        }
        if (!is_null($shippingCost)) {
            return $shippingCost;
        }

        return 0;
    }

    public static function clear(): void
    {
        session()->forget('cart');
    }

    public static function formattedTotal(): string
    {
        return number_format(self::getTotal(), 2) . ' ₺';
    }

    public static function formattedDiscount(): string
    {
        if (self::getDiscounts()['amount'] > 0){
            return "- " . number_format(self::getDiscounts()['amount'], 2) . ' ₺';
        }else{
            return number_format(self::getDiscounts()['amount'], 2) . ' ₺';
        }
    }

    public static function formattedSubTotal(): string
    {
        return number_format(self::subTotal(), 2) . ' ₺';
    }

    public static function formattedShipping(): string
    {
        return number_format(self::getTotalWithShipping(), 2) . ' ₺';
    }

    public static function formattedTax(): string
    {
        return number_format(self::getTotalWithTax(), 2) . ' ₺';
    }
}
