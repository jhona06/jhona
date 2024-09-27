<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age = 18)
    {
        // Get the age from session or request
        $userAge = $request->input('age');
        
        // Check if the user is under the specified age
        if ($userAge < $age) {
            return redirect('/access-denied'); // Redirect to access denied page
        }

        return $next($request); // Continue to next middleware if age is valid
    }
}
