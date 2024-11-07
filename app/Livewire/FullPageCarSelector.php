<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Maker;
use Livewire\Component;

class FullPageCarSelector extends Component
{
    public ?string $makerId = null;

    public ?string $shortName = null;

    public ?string $carId = null;

    public ?string $year = null;

    public function getItems(bool &$expandCols)
    {
        if ($this->makerId === null) {
            return Maker::get(['id', 'name'])
                ->map(fn (Maker $maker) => [
                    'name' => $maker->name,
                    'image' => '',
                    'action' => "\$set('makerId', $maker->id)",
                ]);
        }

        if ($this->shortName === null) {
            return Car::where('maker_id', $this->makerId)->groupBy('short_name')->get(['id', 'name', 'short_name'])
                ->map(fn (Car $car) => [
                    'name' => $car->short_name,
                    'image' => $car->imageUrl(),
                    'action' => "\$set('shortName', '$car->short_name')",
                ]);
        }

        if ($this->year === null) {
            return Car::where('maker_id', $this->makerId)->where('short_name', $this->shortName)->get(['id', 'from_year'])
                ->map(fn (Car $car) => [
                    'name' => $car->from_year,
                    'image' => $car->imageUrl(),
                    'action' => "\$set('year', $car->from_year)",
                ]);
        }

        if ($this->carId === null) {
            $expandCols = true;

            return Car::query()
                ->where('maker_id', $this->makerId)
                ->where('short_name', $this->shortName)
                ->where('from_year', $this->year)
                ->get(['id', 'type'])
                ->map(fn (Car $car) => [
                    'name' => $car->type,
                    'image' => $car->image,
                    'action' => "\$set('carId', $car->id)",
                ]);
        }
    }

    public function back()
    {
        if ($this->carId !== null) {
            $this->carId = null;
        } elseif ($this->year !== null) {
            $this->year = null;
        } elseif ($this->shortName !== null) {
            $this->shortName = null;
        } elseif ($this->makerId !== null) {
            $this->makerId = null;
        }
    }

    public function render()
    {
        $expandCols = false;
        if ($this->carId !== null) {
            $car = Car::find($this->carId);
            \App\Facades\Garage::addAndChoose($car);
            $this->redirect(route('category.index'));
            $items = [];
        } else {
            $items = $this->getItems($expandCols);
        }
        dd($items);

        return view('livewire.full-page-car-selector', compact('items', 'expandCols'));
    }
}
