<?php

namespace App\Packages;

use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;

class CartItemSynthesizer extends Synth
{

    static function match($target)
    {
        return $target instanceof CartItem;
    }

    public function dehydrate(CartItem $target)
    {
        return [$target->toArray(), ['cartItem']];
    }

    public function hydrate($value)
    {
        return new CartItem(...$value);
    }
}
