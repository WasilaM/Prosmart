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
  public function handle($request, Closure $next)
  {
    if (\Request::is('admin') || \Request::is('admin/*') )
    {
      if (!Auth::check()) {
        return redirect()->route('admin.login');
      }
      return $next($request);
    }
  }
}
