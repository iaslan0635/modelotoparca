<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class AddAddress extends Component
{
    public $edit = false;

    public $address;

    public $type = 'individual';

    public function render()
    {
        return view('livewire.user.add-address');
    }
}
