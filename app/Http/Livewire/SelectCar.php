<?php

namespace App\Http\Livewire;

use App\Facades\Garage as GarageFacade;
use App\Models\Car;
use App\Models\Category;
use App\Models\Maker;
use Livewire\Component;

class SelectCar extends Component
{
    public $lists = [];

    public $chosen = [];

    public $stage = 'makers';

    public $previusStage = '';

    public $order = [
        'makers',
        'short_names',
        'names',
        'cars',
        'categories',
    ];

    public function render()
    {
        $this->loadStageData();

        return view('livewire.select-car');
    }

    public function loadStageData()
    {
        $this->lists[$this->stage] = match ($this->stage) {
            'makers' => Maker::all()
                ->map(fn (Maker $m) => [
                    'constraint' => $m->id,
                    'name' => $m->name,
                ]),
            'short_names' => Maker::findOrFail($this->chosen['makers']['constraint'])
                ->cars()->with('maker')->groupBy('short_name')->get()
                ->map(fn (Car $c) => [
                    'constraint' => $c->short_name,
                    'title' => "{$c->maker->name} $c->short_name",
                    'name' => "$c->short_name",
                ]),
            'names' => Car::where('short_name', $this->chosen['short_names']['constraint'])
                ->groupBy('name')->get()
                ->map(fn (Car $c) => [
                    'constraint' => $c->name,
                    'name' => $c->name,
                ]),
            'cars' => Car::where('name', $this->chosen['names']['constraint'])->get()
                ->map(fn (Car $c) => [
                    'constraint' => $c->id,
                    'name' => "$c->power Kw",
                    'title' => "$c->name / $c->power Kw",
                ]),
            'categories' => Category::root()->with('image')->get(['id', 'name', 'slug'])
                ->map(fn (Category $c) => [
                    'constraint' => $c->slug,
                    'name' => $c->name,
                    'image' => $c->image?->url,
                ])
        };
    }

    public function stageIndex()
    {
        return array_search($this->stage, $this->order);
    }

    public function incrementStage()
    {
        $i = $this->stageIndex() + 1;
        $this->stage = $this->order[$i];
        $this->previusStage = $this->order[$i - 1];
    }

    public function decrementStage()
    {
        $i = $this->stageIndex() - 1;
        if ($i < 0) {
            $i = 0;
        }
        $this->stage = $this->order[$i];
        $this->previusStage = $i <= 0 ? '' : $this->order[$i - 1];
    }

    public function choose(int $index)
    {
        if ($this->stage == 'categories') {
            $car = Car::findOrFail($this->chosen['cars']['constraint']);
            GarageFacade::addAndChoose($car);
            $this->redirect(route('category.show', $this->lists['categories'][$index]['constraint']));
        } else {
            $this->chosen[$this->stage] = $this->lists[$this->stage][$index];
            $this->incrementStage();
        }
    }
}
