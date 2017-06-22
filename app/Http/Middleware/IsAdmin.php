<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    public function handle($request, Closure $next)
//    {
//
////        dd(Auth::user());
//        if (Auth::user() &&  Auth::user()->role_id == 1) {
//            return $next($request);
//        }
//
////        return redirect('/');
//    }

    public function handle($request, Closure $next)
    {
        if ( (Auth::user() && Auth::user()->role_id !== 1) || Auth::user() === null) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->back();
            }
        }

        return $next($request);
    }
}
