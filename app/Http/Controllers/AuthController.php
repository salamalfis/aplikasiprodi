<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.signin');
    }

    function dashboard()
    {
        return view('dashboard');
    }

    public function sign_in(){

        return view('auth.signin');
    }

    public function sign_up(){
        return view('auth/signup');
    }


}
