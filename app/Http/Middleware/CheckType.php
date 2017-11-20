<?php

namespace App\Http\Middleware;

use Closure;

class CheckType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$types)
    {
        if(! $request->user()->hasType($types)){
            return response()->view('errors.403',[], 403);
        }
        return $next($request);
    }
}
