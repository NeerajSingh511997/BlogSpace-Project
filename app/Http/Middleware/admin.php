<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use User;
use Session;


class admin
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
        if(Auth::user()->admin == 0) {

           Session::flash('info', "You don't have the required permission to access this page.");

           return redirect()->back();

        }

        return $next($request);
    }
}
