<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserRegisteredEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("admin.authentication.sign-in");
    }

    public function register(RegisterRequest $registerRequest)
    {
        $data = $registerRequest->validated();
        $data['password'] = Hash::make($registerRequest->input('password'));
        $user = User::create($data);

        \Auth::login($user);
        UserRegisteredEvent::dispatch($user);

        return redirect()->route('welcome');
    }

    public function authenticate(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (\Auth::attempt($credentials)) {
            return redirect()->intended('/admin');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Geçersiz giriş bilgileri']);
        }
    }

    public function logout()
    {
        \Auth::logout();

        return redirect("/");
    }
}
