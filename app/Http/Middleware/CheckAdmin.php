<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        $user = Auth::user();

        foreach ($user->roles as $role)
        {
            if ($role->name == 'admin')
                return $next($request);
        }

        return redirect(route('admin'));
    }
}
