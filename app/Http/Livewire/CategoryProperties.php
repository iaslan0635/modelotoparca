<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProperties extends Component
{
    public $category;
    

    public function render()
    {
        return view('livewire.category-properties');
    }
}
