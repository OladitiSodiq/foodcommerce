<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class IsValidUser
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
    if (!Session::get('logged_in')) {
      return redirect('/login');
    }
    return $next($request);
  }
}
