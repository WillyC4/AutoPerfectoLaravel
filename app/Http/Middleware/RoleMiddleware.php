<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Debes iniciar sesión.');
        }

        if (!in_array(Auth::user()->role, $roles)) {
            return redirect('/')->with('error', 'Acceso no autorizado.');
        }

        return $next($request);
    }
}