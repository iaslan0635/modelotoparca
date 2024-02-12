<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $employees = Employee::with("permissions")->get();
        return view("admin.inhouse.permission.index", compact("employees"));
    }

    public function edit(Employee $employee)
    {
        return view("admin.inhouse.permission.edit", compact("employee"));
    }
}
