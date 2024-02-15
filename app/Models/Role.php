<?php

namespace App\Models;

use Spatie\Permission\Models\Role as BaseRole;

class Role extends BaseRole
{
    public function permissionTree()
    {
        return $this->morphOne(PermissionTree::class, 'model');
    }
}
