<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthenticatedSessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    protected function redirectTo()
    {
        return '/dashboard';
    }
}
