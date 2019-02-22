<?php

namespace App\Http\Middleware;

use Closure;

class AddXFrameOptions
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
        $response = $next($request);
        // $response->headers->set('X-Frame-Options', 'deny');
        $response->header('X-Frame-Options', 'deny');
        return $response;
    }
}
