<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            if ($roles) {
                if (in_array(auth()->user()->getRoleName(), $roles)) {
                    return $next($request);
                }
            }
        }

        return redirect('/login');
    }
}
