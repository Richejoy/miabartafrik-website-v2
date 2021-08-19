<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Lock
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
        if (!session()->has('lockUser')) return redirect()->route('page.login');

        return $next($request);
    }
}
