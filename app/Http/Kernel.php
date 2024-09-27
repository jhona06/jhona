<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // other global middleware
        \App\Http\Middleware\LogRequests::class,
    ];
    
    protected $routeMiddleware = [
        // other route middleware
        'check.age' => \App\Http\Middleware\CheckAge::class,
    ];
}
