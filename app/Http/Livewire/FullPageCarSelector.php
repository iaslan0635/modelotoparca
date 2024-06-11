<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Maker;
use Livewire\Component;

class FullPageCarSelector extends Component
{
    public ?string $makerId = null;
    public ?string $shortName = null;
    public ?string $modelId = null;

    protected $queryString = [
        "makerId" => ["except" => null],
        "shortName" => ["except" => null],
        "modelId" => ["except" => null],
    ];

    public function getItems()
    {
        if ($this->makerId === null) {
            return Maker::get(["id", "name"])
                ->map(fn(Maker $maker) => [
                    "name" => $maker->name,
                    "image" => "",
                    "action" => "\$set('makerId', $maker->id)"
                ]);
        }

        if ($this->shortName === null) {
            return Car::where("maker_id", $this->makerId)->groupBy("short_name")->get(["id", "name", "short_name"])
                ->map(fn(Car $car) => [
                    "name" => $car->short_name,
                    "image" => $car->imageUrl(),
                    "action" => "\$set('shortName', $car->short_name)"
                ]);
        }

        if ($this->modelId === null) {
            return Car::where("maker_id", $this->makerId)->where("short_name", $this->shortName)->get(["id", "name"])
                ->map(fn(Car $car) => [
                    "name" => $car->name,
                    "image" => $car->imageUrl(),
                    "action" => "\$set('modelId', $car->id)"
                ]);
        }

        dd("Selected model: " . $this->modelId);
    }

    public function render()
    {
        $items = $this->getItems();
        return view('livewire.full-page-car-selector', compact('items'));
    }
}
