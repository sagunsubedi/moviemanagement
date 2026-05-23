<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

   
    public function handle(Request $request, Closure $next)
{
    if (!auth()->check()) {
        return redirect('/login'); // not logged in, send to login
    }

    if (auth()->user()->role !== 'admin') {
        abort(403, 'Access denied. Admins only.'); // logged in but not admin
    }

    return $next($request);
}
}
