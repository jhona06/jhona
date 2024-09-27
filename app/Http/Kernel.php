<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // ...
        'check.age' => \App\Http\Middleware\CheckAge::class,
        'log.requests' => \App\Http\Middleware\LogRequests::class,
    ];
    protected $middlewareGroups = [
        'web' => [
            // ...
            \App\Http\Middleware\LogRequests::class,
        ],
        // ...
    ];
    
    
}
