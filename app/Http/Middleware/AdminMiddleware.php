<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->type == 'admin') {
            return $next($request);
        }

        throw new AuthenticationException(
            "Admin sayfasına erişim yetkiniz yok.",
            ['web'],
            route('admin.auth.login')
        );
    }
}
