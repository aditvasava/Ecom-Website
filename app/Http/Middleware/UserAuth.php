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
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if($request->path()=="login" && $request->session()->has('user'))
      {
          return redirect('/');
      }
      if($request->path()=="cart" && !($request->session()->has('user')))
      {
        return redirect('/login');
      }
      if($request->path()=="orderplaced" && !($request->session()->has('user')))
      {
        return redirect('/login');
      }
      if($request->path()=="addtocart" && !($request->session()->has('user')))
      {
        return redirect('/login');
      }
      return $next($request);
    }
}
