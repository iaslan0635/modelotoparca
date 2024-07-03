<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCardImage extends Component
{
    public function __construct(
        public $product,
        public bool $compatible = false,
    )
    {
    }

    public function render(): ?View
    {
        return $this->product === null ? null : view('components.product-card-image');
    }
}
