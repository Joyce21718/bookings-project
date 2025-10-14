<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in
        if (auth()->check()) {
            // Example: kung naay "role" column sa users table
            if (auth()->user()->role === 'customer') {
                return $next($request);
            }
        }

        // If not a customer, redirect to login
        return redirect()->route('customlogin');
    }
}
