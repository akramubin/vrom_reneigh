<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
<<<<<<< HEAD
{
    if (auth()->check() && auth()->user()->roles == "ADMIN") {
        return $next($request);
    }

    return redirect('/');
}
}
=======
    {
        if (auth()->check() && auth()->user()->roles == "ADMIN") {
            return $next($request);
        }

        return redirect('/');
        }
}
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
