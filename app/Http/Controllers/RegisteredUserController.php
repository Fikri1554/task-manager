<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function create()
    {
        return view('auth.register');
    }

    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'password' => ['required','string','min:8', 'confirmed'],
        ]);

        if ($validator->fails()){            
            return redirect('/register')
                ->withErrors($validator)->withInput();
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
