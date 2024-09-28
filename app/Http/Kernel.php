<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // ...
        'checkAge' => \App\Http\Middleware\CheckAge::class,
    ];
    protected $middlewareGroups = [
        'web' => [
            // ...
            \App\Http\Middleware\LogRequests::class,
        ],
        // ...
    ];
    
    
}
