<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $age = 18)
    {
        // Check if the age parameter is provided
        if ($request->has('age') && $request->input('age') < $age) {
            return redirect('/access-denied');
        }

        return $next($request);
    }
}
