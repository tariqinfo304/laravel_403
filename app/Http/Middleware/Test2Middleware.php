<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Test2Middleware
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
        echo "Tariq-2";
        return $next($request);
    }
}
