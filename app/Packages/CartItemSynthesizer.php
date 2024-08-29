<?php

namespace App\Packages;

use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;

class CartItemSynthesizer extends Synth
{
    static $key = 'cartItem';

    static function match($target)
    {
        return $target instanceof CartItem;
    }

    public function dehydrate(CartItem $target, $dehydrateChild)
    {
        return [
            [
                "id" => $target->id,
                "name" => $target->name,
                "quantity" => $target->quantity,
                "price" => $target->price,
                "attributes" => $target->attributes,
                "model" => $dehydrateChild('model', $target->model),
            ],
            []
        ];
    }

    public function hydrate($value, $meta, $hydrateChild)
    {
        return new CartItem(
            id: $value['id'],
            name: $value['name'],
            quantity: $value['quantity'],
            price: $value['price'],
            attributes: $value['attributes'],
            model: $hydrateChild('model', $value['model'])
        );
    }
}
