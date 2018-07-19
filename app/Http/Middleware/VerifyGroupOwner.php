<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Group;

class VerifyGroupOwner
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
        $groupid = $request->route('group')->id;
        $group = Group::findOrFail($groupid);
        if (Auth::guest()) {
            return redirect()->guest('login');
        }
        if (Auth::user()->id != $group->user->id) {
            return response('Je hebt geen toegang tot deze groep', 401);
        }
        return $next($request);
    }
}
