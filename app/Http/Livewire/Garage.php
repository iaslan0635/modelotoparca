<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class Garage extends Component
{
    public function render()
    {
        $cars = session("garage_cars", []);
        $chosen = session("garage_chosen");

        return view('livewire.garage', compact("cars", "chosen"));
    }

    public static function chooseCar(int $id)
    {
        session()->put("garage_chosen", $id);
    }

    public function choose(int $id)
    {
        self::chooseCar($id);
    }

    public function remove(int $id)
    {
        $cars = session("garage_cars", []);
        session()->put("garage_chosen", array_filter($cars, fn($car) => $car["id"] !== $id));
    }

    public static function add(Car $car)
    {
        $cars = session("garage_cars", []);
        $cars[] = [
            "id" => $car->id,
            "name" => $car->short_name,
            "details" => $car->name
        ];
        session()->put("garage_cars", $cars);
    }
}
