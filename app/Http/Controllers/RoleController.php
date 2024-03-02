<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();

        return view('admin.apps.user-management.roles.list', compact('roles'));
    }

    public function show(Role $role)
    {
        $users = $role->users()->paginate(5);

        return view('admin.inhouse.role.show', compact('role', 'users'));
    }

    public function create()
    {
        return view('admin.inhouse.role.create');
    }

    public function edit(Role $role)
    {
        return view('admin.inhouse.role.edit', compact('role'));
    }

    public function store(Request $request)
    {
        if ($request->has('id')) {
            Role::findOrFail($request->input('id'))->update(['name' => $request->input('name')]);
        } else {
            Role::create(['name' => $request->input('name'), 'guard_name' => 'admin']);
        }

        return redirect()->route('admin.role.index');
    }

    public function unassign(Role $role, Employee $user)
    {
        $user->removeRole($role);

        return back();
    }

    public function delete(Role $role) // TODO: use destroy method
    {
        $role->delete();

        return back();
    }
}
