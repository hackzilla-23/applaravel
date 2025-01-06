<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsPersonne
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('hello middleware IsPersonne');
        // return $next($request);
        if (auth()->guard('personnes')->check()) {
            return $next($request);
        } 
        return redirect()->route('login');
    }
}
