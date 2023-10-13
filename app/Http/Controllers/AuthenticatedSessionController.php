<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\LoginViewResponse;


class AuthenticatedSessionController extends Controller
{
    use LoginResponse;

    public function create()
    {
        return view('auth.login');
    }

    protected function redirectTo()
    {
        return '/dashboard';
    }
}
