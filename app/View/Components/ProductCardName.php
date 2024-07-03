<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCardName extends Component
{
    public function __construct(
        public Product $product,
    )
    {
    }

    public function render(): View
    {
        $defaultSentinel = new \stdClass();
        $brand = $this->product->brand;
        $brandImage = $brand?->imageUrl($defaultSentinel);
        $hasBrandImage = $brandImage !== null && $brandImage !== $defaultSentinel;

        $product = $this->product;

        return view('components.product-card-name', compact("hasBrandImage", "brandImage", "product"));
    }
}
