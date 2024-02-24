<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Authenticatable
{
    use SoftDeletes, Notifiable, HasPermissions, HasRoles;

    protected $guarded = [];

    public function fullName(): Attribute
    {
        return Attribute::get(fn() => "$this->first_name $this->last_name");
    }

    public function permissionTree()
    {
        return $this->morphOne(PermissionTree::class, 'model');
    }
}
