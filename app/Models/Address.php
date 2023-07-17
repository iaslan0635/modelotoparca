<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends BaseModel
{
    use SoftDeletes;

    protected function fullName(): Attribute
    {
        return Attribute::get(fn($value) => $this->type === "individual" ? "$this->first_name $this->last_name":"$this->company_name");
    }
}
