<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\LoginViewResponse;
use Laravel\Fortify\HandlesAuthenticationResponses;


class AuthenticatedSessionController extends Controller
{
    use HandlesAuthenticationResponses;

    public function create()
    {
        return view('auth.login');
    }

    protected function redirectTo()
    {
        return '/dashboard';
    }
}
