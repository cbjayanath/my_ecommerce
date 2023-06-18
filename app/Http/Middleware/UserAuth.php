<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   if($request->path()=="login" && $request->session()->has('user')){
        
            return redirect('/');
        }
        return $next($request);
    }
}

/*
 * Middleware acts as a bridge between a request and a response. It is a type of filtering mechanism.
 
 * Laravel includes a middleware that verifies whether the user of the application is authenticated or not. 
 * If the user is authenticated, it redirects to the home page otherwise, if not, it redirects to the login page.
 */