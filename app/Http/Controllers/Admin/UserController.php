<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.inhouse.user.index', ["users" => User::paginate()]);
    }

    public function create()
    {
        return view('admin.inhouse.user.create');
    }

    public function store(Request $request)
    {
    }

    public function show(User $employee)
    {
    }

    public function edit(User $employee)
    {
    }

    public function update(Request $request, User $employee)
    {
    }

    public function destroy(User $employee)
    {
    }
}
