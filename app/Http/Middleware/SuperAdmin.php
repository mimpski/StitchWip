<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
          //  dd(auth()->user()['role']);
            if (auth()->user()['role'] == 'superadmin') {
                return $next($request);
            }
            else{
                return redirect('/profile/'.auth()->user()['name']);
            }
        }
        return redirect('/');
    }
}
