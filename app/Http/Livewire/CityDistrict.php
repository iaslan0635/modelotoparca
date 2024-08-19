<?php

namespace App\Http\Livewire;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\County;
use Livewire\Component;

class CityDistrict extends Component
{
    public $cities;

    public $city = 1;

    public $town = '';

    public $type = 'default';

    public function mount()
    {
        $this->addresses();
    }

    public function render()
    {
        $cities = City::all();
        $towns = County::query()->where('city_id', $this->city)->pluck("name")->all();
        return view('livewire.city-district', compact('towns', 'cities'));
    }
}
