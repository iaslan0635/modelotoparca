<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::with("roles")->get();
        return view("admin.apps.user-management.permissions", compact("permissions"));
    }
}
