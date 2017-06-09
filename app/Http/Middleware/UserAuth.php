<?php

namespace Classmate\Http\Middleware;

use Classmate\http\Model\User;
use Closure;
use Illuminate\View\View;

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
        if (session('user')->stuQQ==null){
            return view('index.redirect')->withMsg("您是第一次登录本系统，请先完善个人资料！")->withRdurl(url('/first'));
        }
        return $next($request);
    }
}
