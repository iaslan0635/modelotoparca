<?php

namespace App\Packages;

use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CartItem
{
    public string $id;

    public string $name;

    public int $quantity;

    public float $price;

    public array $attributes;

    public $model;

    public bool $alert = false;

    public string $alertType = 'warning';

    public string $alertMessage = '';

    public bool $stockAlert = false;

    public string $stockAlertType = 'warning';

    public string $stockAlertMessage = '';

    public function __construct($id, $name, $quantity, $price, $attributes, $model)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->attributes = $attributes;
        $this->model = $model;

        $this->priceControl();
        $this->stockControl();
    }

    public function formattedPrice($price = null)
    {
        return number_format($price ?? $this->price, 2).' ₺';
    }

    public function totalFormattedPrice()
    {
        return $this->formattedPrice($this->price * $this->quantity);
    }

    public function stockControl(): void
    {
        try {
            $product = Product::query()->findOrFail($this->model->id);

            if ($product->quantity < 1) {
                $this->stockAlert = true;
                $this->stockAlertType = 'danger';
                $this->stockAlertMessage = 'Bu ürünün stokta kalmamıştır. Bilgi almak için müşteri temsilcimize ulaşın.';
            }

            if ($product->quantity < $this->quantity && $product->quantity !== 0) {
                $this->stockAlert = true;
                $this->stockAlertType = 'warning';
                $this->stockAlertMessage = 'Ürün stoğu sepetinizde ki adet sayısından azdır. Sepetinizdeki ürün stok miktarı azaltılmıştır.';

                Cart::updateItem($this->id, $product->quantity);
            }

        } catch (ModelNotFoundException $exception) {
            $this->alert = true;
            $this->alertType = 'danger';
            $this->alertMessage = 'Ürün kaldırılmış olabilir. Daha detaylı bir inceleme için destek ekibine yazınız.';
        }
    }

    public function priceControl(): void
    {
        try {
            $product = Product::query()->findOrFail($this->model->id);

            $listingPrice = $product->price->sellingPrice()->getValue();
            if ($listingPrice != $this->price) {
                $this->alert = true;
                $this->alertType = 'warning';
                $this->alertMessage = 'Ürün fiyatı güncellenmiştir biz de sepetinizde fiyatı güncelledik.';

                Cart::updateItemPrice($this->id, $listingPrice);
            }

        } catch (ModelNotFoundException $exception) {
            $this->alert = true;
            $this->alertType = 'danger';
            $this->alertMessage = 'Ürün kaldırılmış olabilir. Daha detaylı bir inceleme için destek ekibine yazınız.';
        }
    }
}
