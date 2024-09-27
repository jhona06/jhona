<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Other global middleware...
        \App\Http\Middleware\LogRequests::class,
    ];
}
