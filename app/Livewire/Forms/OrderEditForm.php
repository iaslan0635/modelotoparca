<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderEditForm extends Form
{
    public $id;

    #[Validate(['required'])]
    public $status = '';

    public function store()
    {
        Order::whereKey($this->id)->update($this->validate());
    }

    public function setOrder(Order $order)
    {
        $this->id = $order->id;
        $this->status = $order->status;
    }
}
