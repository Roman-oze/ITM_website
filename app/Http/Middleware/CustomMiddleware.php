<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var App\Models\Users */
        if(Auth::check()){
            $user = Auth::check();
            if($user->hasRole(['super-admin','admin','faculty']))
            {

                return $next($request);

            }
            abort(403,"User Does not have correct roles");

        }

        abort(401);

    }
}
