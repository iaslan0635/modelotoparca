<?php

namespace App\Facades;

use App\Models\Car;

class Garage
{
    public static function add(Car $car): void
    {
        self::addRaw([
            'id' => $car->id,
            'name' => $car->short_name,
            'details' => $car->name,
        ]);
    }

    public static function addRaw(array $rawCar): void
    {
        $items = self::items();
        $items[] = $rawCar;
        session()->put('garage_cars', $items);
    }

    public static function items(): array
    {
        return session('garage_cars', []);
    }

    public static function remove(int $id): void
    {
        $cars = self::items();
        session()->put('garage_cars', collect($cars)->filter(fn ($car) => $car['id'] !== $id)->all());
    }

    public static function chosen(): int|null
    {
        return session('garage_chosen');
    }

    public static function choose(int $id): void
    {
        session()->put('garage_chosen', $id);
    }

    public static function hasChosen(): bool
    {
        return session()->has('garage_chosen');
    }
}
