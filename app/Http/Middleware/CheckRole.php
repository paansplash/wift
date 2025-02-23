<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action - User not authenticated.');
        }

        $user = Auth::user();

        // Debug: Print user role
        if ($user->role) {
            Log::info('User Role: ' . $user->role->name);
        } else {
            Log::info('User Role: Not assigned');
        }

        if (!in_array($user->role->name, $roles)) {
            abort(403, 'Unauthorized action - Role mismatch.');
        }

        return $next($request);
    }
}
