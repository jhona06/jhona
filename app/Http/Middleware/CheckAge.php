<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $age
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $age = 18)
    {
        // Assuming age is provided as a query parameter (modify according to how you get the user's age)
        if ($request->input('age') < $age) {
            return redirect('access-denied');
        }

        return $next($request);
    }
}
