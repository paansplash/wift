<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                logger('Authenticated User ID: ' . $user->id);
                logger('User Role ID: ' . $user->role_id);

                // Convert role_id to role name (if needed)
                $role = match ($user->role_id) {
                    1 => 'Super Admin',
                    2 => 'Admin',
                    3 => 'Vendor',
                    4 => 'User',
                    default => 'Guest',
                };

                if ($role === 'Admin' || $role === 'Super Admin') {
                    return redirect('/admin/home');
                } elseif ($role === 'User') {
                    return redirect('/user/home');
                }
            }
        }

        return $next($request);
    }
}
