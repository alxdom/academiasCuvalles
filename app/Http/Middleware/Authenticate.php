<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  App\Http\Requests\LoginRequest;  $request
     * @return string|null
     */
    protected function redirectTo(Request $request)
    {
        
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
