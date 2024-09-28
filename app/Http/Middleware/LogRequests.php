<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
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
        $logData = [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'timestamp' => now()->toDateTimeString()
        ];

        Log::channel('custom')->info('Request Details:', $logData);

        return $next($request);
    }
}
