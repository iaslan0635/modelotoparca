<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with("permissions")->get();
        return view("admin.apps.user-management.roles.list", compact('roles'));
    }

    public function show(Role $role)
    {
        $users = $role->users()->paginate(5);
        return view("admin.apps.user-management.roles.view", compact("role", "users"));
    }

    public function create()
    {
        return view("admin.apps.user-management.roles.edit");
    }

    public function edit(Role $role)
    {
        return view("admin.apps.user-management.roles.edit", compact("role"));
    }

    public function store(Request $request)
    {
        $role = $request->has("id") ? Role::findOrFail($request->input("id")) : Role::create(["name" => $request->input("name")]);

        $permissionIds = $request->collect()->filter(fn($value) => $value === "permit")->keys();
        $role->syncPermissions($permissionIds);

        return redirect()->route("admin.role.index");
    }
}
