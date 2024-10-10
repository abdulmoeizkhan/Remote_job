<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Seeker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) {
    //   dd(Auth::user());
        if (Auth::check() && Auth::user()->user_type == '3')  {
          return $next($request);
        } else{
          Auth::logout();
          return redirect('login');
        }
    
      
       }
}
