<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Select2 extends Component
{
    public array $options;

    #[Modelable]
    public string $value;

    public function render()
    {
        return view('livewire.select2');
    }
}
