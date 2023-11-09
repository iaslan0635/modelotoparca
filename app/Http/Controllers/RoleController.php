<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with("permissions")->get();
        return view("admin.apps.user-management.roles.list", compact('roles'));
    }

    public function show()
    {
        return view("admin.apps.user-management.roles.view");
    }

    public function edit()
    {
        return view("admin.apps.user-management.roles.edit");
    }
}
