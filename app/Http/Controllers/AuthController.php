<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Login User
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        
        if (Auth::attempt($credentials)) {
            return redirect()->intended('layouts.app');
        }else{
            return redirect()->intended('/');
        }
    }
}
