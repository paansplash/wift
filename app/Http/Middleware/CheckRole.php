<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the user is authenticated and has one of the specified roles
        if (!Auth::check() || !in_array(Auth::user()->role->name, $roles)) {
            // Redirect or abort with a 403 forbidden if the user does not have access
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
