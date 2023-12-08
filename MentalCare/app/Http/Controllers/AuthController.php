<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the user
        $validate = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Create the user
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/login');
    }

    public function logout()
    {

    }

    public function authenticate(Request $request)
    {
        
    }

}
