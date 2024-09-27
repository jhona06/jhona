<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\File; // Import the File facade
class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        // Define the log details
        $logDetails = sprintf(
            "[%s] %s %s\n", // Format: [timestamp] METHOD URL
            now()->toDateTimeString(),
            $request->method(),
            $request->fullUrl()
        );

        // Append the log details to log.txt
        File::append(storage_path('logs/log.txt'), $logDetails);

        return $next($request);
    }
}
