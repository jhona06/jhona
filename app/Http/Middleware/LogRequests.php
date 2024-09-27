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
        $log = "[" . now() . "] " . $request->method() . " " . $request->fullUrl() . "\n";
        file_put_contents(storage_path('logs/log.txt'), $log, FILE_APPEND);

        return $next($request);
    }
}
