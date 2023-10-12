<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthenticatedSessionController extends Controller
{
    use AuthenticatesUsers;

    public function create()
    {
        return view('auth.login');
    }

    protected function redirectTo()
    {
        return '/dashboard';
    }
}
