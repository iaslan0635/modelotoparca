<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.inhouse.employee.index', ['employees' => Employee::paginate()]);
    }

    public function create()
    {
        return view('admin.inhouse.employee.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:employees,email'],
            'password' => ['required', 'confirmed'],
        ]);
        $data['password'] = Hash::make($data['password']);
        Employee::create($data);

        return redirect()->route('admin.user.index');
    }

    public function show(Employee $employee)
    {
        return view('admin.inhouse.employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('admin.inhouse.employee.create', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['sometimes', 'confirmed'],
        ]);

        if (array_key_exists('password', $data)) {
            $data['password'] = Hash::make($data['password']);
        }

        $employee->update($data);

        return redirect()->route('admin.user.index');
    }

    public function destroy(Employee $employee)
    {
    }
}
