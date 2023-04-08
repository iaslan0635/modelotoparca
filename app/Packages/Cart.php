<?php

namespace App\Packages;

use Illuminate\Support\Facades\Session;

class Cart
{
    protected static float|int $taxRate;
    protected static float|int $shippingCost;

    public static function addItem($name, $price, $quantity = 1, $attributes = []): void
    {
        $items = Session::get('cart.items', []);
        $itemIndex = (new Cart)->findItemIndex($name, $attributes, $items); // Aynı ürünü sepetin içinde arar

        if ($itemIndex === null) {
            // Eğer ürün sepette yoksa, yeni bir öğe olarak ekle
            $itemId = uniqid();
            $itemWithId = [
                'id' => $itemId,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'attributes' => $attributes,
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

    public function findItemIndexById($itemId): ?int
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
                unset($items[$index]);
                break;
            }
        }

        Session::put('cart.items', $items);
    }

    public static function updateItem($itemId, $newQuantity): void
    {
        $items = Session::get('cart.items', []);
        $itemIndex = (new Cart)->findItemIndexById($itemId, $items);

        if ($itemIndex !== null) {
            if ($newQuantity == 0) {
                unset($items[$itemIndex]);
            } else {
                $items[$itemIndex]['quantity'] = $newQuantity;
            }
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

    public static function getTotal(): float|int
    {
        $total = self::subTotal();

        $total += (new Cart)->getTotalWithTax();

        $total += (new Cart)->getTotalWithShipping();

        return $total;
    }

    public static function getItems(): array
    {
        return Session::get('cart.items', []);
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
        if (!is_null($taxRate)) return $total * $taxRate / 100;

        return 0;
    }

    public static function getTotalWithShipping(): float|int
    {
        $total = self::subTotal();

        $shippingCost = session('cart.shippingCost');
        if (!is_null($shippingCost)) return $shippingCost;

        return 0;
    }


    public static function clear(): void
    {
        session()->forget('cart');
    }
}
