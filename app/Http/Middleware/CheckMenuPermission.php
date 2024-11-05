<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
    // public function handle($request, Closure $next, $permission = 'view')
    // {
    //     $user = Auth::user();
    //     $role = $user->role;

    //     // Retrieve the current route name (assuming menu items are defined by their names in the route)
    //     $menuName = $request->route()->getName();

    //     // Find the menu permission for the user's role and the requested menu item
    //     $menuPermission = MenuPermission::where('role', $role)
    //         ->whereHas('menu', function ($query) use ($menuName) {
    //             $query->where('name', $menuName);
    //         })->first();

    //     // Check if the user has the required permission or is a super-admin with full access
    //     if ($menuPermission && ($menuPermission->$permission || $role === 'super-admin')) {
    //         return $next($request);
    //     }

    //     // Redirect to an access denied route if the user lacks permission
    //     return redirect()->route('access.denied')->with('error', 'You do not have permission to access this resource.');
    // }


}
