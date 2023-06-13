<?php

namespace App\Http\Livewire\Admin;

use App\Models\Car;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;

class CarTable extends Component
{
    public array $cars;

    public function render()
    {
        return view('livewire.admin.car-table');
    }

    public function toggleIndexing($index, $prevState)
    {
        list("id" => $carId) = $this->cars[$index];
        $car = Car::find($carId);
        $car->indexable = !$prevState;
        $car->save();
        $this->cars[$index] = $car;
    }
}
