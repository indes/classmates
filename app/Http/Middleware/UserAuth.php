<?php

namespace Classmate\Http\Middleware;

use Closure;

class UserAuth
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
//        dd(session('user'));
        if(!session('user')){
            return redirect('auth/login');
        }
        return $next($request);
    }
}
