<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * Uso en rutas: ->middleware('role:administrador') o 'role:administrador|empleado'
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // o abort(403)
        }

        $user = Auth::user();
        $rolesArray = explode('|', $roles);

        if (! in_array($user->rol, $rolesArray)) {
            abort(403, 'Acceso denegado'); // o redirect()->route('home')->with('error', ...)
        }

        return $next($request);
    }
}
