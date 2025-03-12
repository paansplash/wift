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
        if (Auth::check()) {
            $roleId = Auth::user()->role_id; // Ensure you're checking role_id

            if ($roleId == 4) { // Example: Assuming 'User' role has ID 2
                return '/user/home';
            } elseif ($roleId == 1 || $roleId == 2) { // Example: Assuming 'Admin' has ID 1, 'Super Admin' has ID 3
                return '/admin/home';
            }
        }

        return '/'; // Default fallback
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
