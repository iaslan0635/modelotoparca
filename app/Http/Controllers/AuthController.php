<?php

namespace App\Http\Controllers;

use App\Events\UserRegisteredEvent;
use App\Http\Requests\RegisterRequest;
use App\Models\CalculateTool;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use function auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $registerRequest)
    {
        $data = $registerRequest->validated();
        $data['password'] = Hash::make($registerRequest->input('password'));
        $user = User::create($data);

        $sessionId = Session::getId();

        \Auth::login($user);
        CalculateTool::where('session_id', $sessionId)->update(['user_id' => auth()->id()]);

        UserRegisteredEvent::dispatch($user);

        return redirect()->route('welcome');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $sessionId = Session::getId();
        if (\Auth::attempt($credentials, true)) {
            CalculateTool::where('session_id', $sessionId)->update(['user_id' => auth()->id()]);
            return redirect()->intended('/');
        } else {
            // Giriş başarısız olduğunda yapılacak işlemler
            return redirect()->route('login-view')->withInput()->withErrors(['email' => 'Geçersiz giriş bilgileri']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login-view');
    }
}
