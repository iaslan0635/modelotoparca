<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;

class SmsTemplate extends Model
{
    public function render(array $data)
    {
        return Blade::render($this->template, $data);
    }
}
