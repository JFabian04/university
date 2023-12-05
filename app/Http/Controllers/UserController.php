<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    // Teachers
    public function teachers(){
        return view('users.teachers');
    }

    public function store(Request $request){

    }
}
