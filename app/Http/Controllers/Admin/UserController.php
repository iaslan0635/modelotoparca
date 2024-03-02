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
        return view('admin.inhouse.user.index', ['users' => User::paginate()]);
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
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->route('admin.user.index');
    }

    public function show(User $user)
    {
        return view('admin.inhouse.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.inhouse.user.create', compact('user'));
    }

    public function update(Request $request, User $user)
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

        $user->update($data);

        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user)
    {
    }
}
