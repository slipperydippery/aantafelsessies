<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class VerifyUser
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
        if (Auth::user()->id != $request->route('user')->id) {
            return response('Je hebt geen toegang tot deze sessie', 401);
        }
        
        return $next($request);
    }
}
