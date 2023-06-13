<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view("admin.pages.cars", [
            "cars" => Car::paginate()
        ]);
    }

    public function toggleIndexing(int $car_id)
    {
        $enable = request("value");
        dd($enable);
    }
}
