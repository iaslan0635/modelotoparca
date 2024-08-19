<?php

namespace App\Http\Livewire;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\County;
use Livewire\Component;

class CityDistrict extends Component
{
    public int $city = 1;

    public ?string $town = null;

    public string $type = 'default';

    public function render()
    {
        $cities = City::all();
        $towns = County::query()->where('city_id', $this->city)->pluck("name");
        $this->town ??= $towns->first();

        return view('livewire.city-district', compact('towns', 'cities'));
    }
}
