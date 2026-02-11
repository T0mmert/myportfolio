<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $adminEmails = ['tom.versteeg@gmail.com']; // CHANGE THIS TO YOUR EMAIL
        
        if (!auth()->check() || !in_array(auth()->user()->email, $adminEmails)) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}