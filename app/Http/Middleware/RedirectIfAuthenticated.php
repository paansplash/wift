<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                
                // Ensure role relationship exists before accessing it
                $roleName = $user->role ? strtolower($user->role->name) : '';

                if (in_array($roleName, ['Super Admin', 'Admin'])) {
                    return redirect()->route('admin.home');
                } elseif ($roleName === 'User') {
                    return redirect()->route('user.home.index');
                } else {
                    return redirect()->route('welcome'); // Default fallback
                }
            }
        }

        return $next($request);
    }
}
