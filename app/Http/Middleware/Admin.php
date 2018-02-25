<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    public function handle($request, Closure $next, $guard = null)
    {
        // if (!Auth::user()->isAdmin()) {
        //     if ($request->ajax() || $request->wantsJson()) {
        //         return response('Not Admin.', 401);
        //     } else {
        //         return redirect()->guest('login');
        //     }
        // }

        if(Auth::check()){
            if(Auth::user()->isAdmin()){
                return $next($request);
            }
        }
        return redirect(404);
    }
}
