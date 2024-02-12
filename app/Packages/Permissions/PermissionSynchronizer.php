<?php

namespace App\Packages\Permissions;

use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;

class PermissionSynchronizer
{
    public static function sync()
    {
        $permissions = Arr::dot(config("permissions"));
        foreach ($permissions as $permission) {
            $exists = Permission::where("name", $permission)->exists();
            if (!$exists) {
                Permission::create(["name" => $permission, "guard_name" => "admin"]);
            }
        }
    }
}
