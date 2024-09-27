<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logData = sprintf(
            "[%s] %s %s",
            now()->toDateTimeString();
            $request->method();
            $request->fullUrl();
        );

        Log::channel('daily')-> info($logData);
        
        return $next($request);
    }
}
