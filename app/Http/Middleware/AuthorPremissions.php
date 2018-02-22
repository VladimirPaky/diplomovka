<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthorPremissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::user()->isAuthor()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Not Author.', 401);
            } else {
                return redirect()->guest('login');
            }
        }
        return $next($request);
    }
}
