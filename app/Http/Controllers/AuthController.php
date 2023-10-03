<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $registerRequest)
    {
        $data = $registerRequest->validated();
        $data['password'] = Hash::make($registerRequest->input('password'));
        $user = User::create($data);

        \Auth::login($user);

        return redirect()->route('welcome');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            // Giriş başarısız olduğunda yapılacak işlemler
            return redirect()->route('login-view')->withInput()->withErrors(['email' => 'Geçersiz giriş bilgileri']);
        }
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login-view');
    }
}
