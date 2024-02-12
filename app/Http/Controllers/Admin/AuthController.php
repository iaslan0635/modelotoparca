<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("admin.authentication.sign-in");
    }

    public function authenticate(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard("admin")->attempt($credentials, true)) {
            return redirect()->intended('/admin');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Geçersiz giriş bilgileri']);
    }

    public function logout()
    {
        Auth::guard("admin")->logout();

        return redirect("/admin/login");
    }
}
