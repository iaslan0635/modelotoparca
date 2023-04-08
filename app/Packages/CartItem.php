<?php

namespace App\Packages;

class CartItem
{
    public string $id;
    public string $name;
    public int $quantity;
    public float $price;
    public string $formattedPrice;
    public array $attributes;
    public $model;

    public function __construct($id, $name, $quantity = 1, $price = 0, $attributes = [], $model)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->attributes = $attributes;
        $this->formattedPrice = number_format($price, 2) . " ₺";
        $this->model = $model;
    }
}
