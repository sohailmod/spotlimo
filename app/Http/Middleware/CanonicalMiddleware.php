<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanonicalMiddleware
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
        $response = $next($request);

        // Add canonical tag to the response
        $canonicalUrl = url()->current();
        $content = $response->getContent();
        $canonicalTag = '<link rel="canonical" href="' . $canonicalUrl . '" />';
        $content = str_replace('<head>', '<head>' . $canonicalTag, $content);

        $response->setContent($content);

        return $response;
    }
}
