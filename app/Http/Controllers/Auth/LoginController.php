<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->role === 'User') {
            return '/user/home';
        } elseif (Auth::check() && (Auth::user()->role === 'Admin' || Auth::user()->role === 'Super Admin')) {
            return '/admin/home';
        }

        return '/'; // Default fallback
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}