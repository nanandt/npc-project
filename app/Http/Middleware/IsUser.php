<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->roles == 'USER'){
            return redirect('/');
        } elseif(Auth::check() && Auth::user()->roles == 'ADMIN'){
            return redirect('/admin');
        }


    }
}
