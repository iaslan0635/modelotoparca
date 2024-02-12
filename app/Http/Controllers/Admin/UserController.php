<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.inhouse.user.index', ["users" => Employee::paginate()]);
    }

    public function create()
    {
        return view('admin.inhouse.user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:employees,email'],
            'password' => ['required', 'confirmed'],
        ]);
        $data['password'] = Hash::make($request->input('password'));
        Employee::create($data);

        return route("admin.user.index");
    }
}
