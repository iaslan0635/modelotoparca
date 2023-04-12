<?php

namespace App\Facades;

use App\Models\Car;

class Garage
{
    public static function add(Car $car)
    {
        self::addRaw([
            "id" => $car->id,
            "name" => $car->short_name,
            "details" => $car->name
        ]);
    }

    public static function addRaw(array $rawCar)
    {
        session()->put("garage_cars", self::items() + [$rawCar]);
    }

    public static function items()
    {
        return session("garage_cars", []);
    }

    public static function remove(int $id)
    {
        $cars = self::items();
        session()->put("garage_chosen", array_filter($cars, fn($car) => $car["id"] !== $id));
    }

    public static function chosen()
    {
        return session("garage_chosen");
    }

    public static function choose(int $id)
    {
        session()->put("garage_chosen", $id);
    }

    public static function hasChosen()
    {
        return session()->has('garage_chosen');
    }
}
