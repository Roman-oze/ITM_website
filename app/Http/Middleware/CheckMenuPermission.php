<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Auth;
use Illuminate\Http\Request;
use App\Models\MenuPermission;
use Symfony\Component\HttpFoundation\Response;

class CheckMenuPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/CheckMenuPermission.php
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role->name !== $role) {
            return redirect('/'); // Redirect if not authorized
        }
        return $next($request);
    }

}
