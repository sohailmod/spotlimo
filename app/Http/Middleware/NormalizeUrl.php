<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NormalizeUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $url = strtolower($request->url());
        $url = rtrim($url, '?'); // Remove trailing question mark
        
        if ($url !== $request->url()) {
            return redirect($url, 301); // Redirect to the normalized URL
        }
    
        return $next($request);    }
}
