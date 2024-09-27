<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age = 18)
    {
        if ($request->session()->has('age')) {
            $userAge = $request->session()->get('age');
            if ($userAge < $age) {
                return redirect('/access-denied'); // Redirect if age is less than required
            }
        }
        return $next($request); // Continue to the next request if age is valid
    }
}
