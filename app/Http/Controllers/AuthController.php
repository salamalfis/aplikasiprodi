<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function index()
    {
        return view('auth.signin');
    }

    // function dashboard()
    // {
    //     return view('dashboard');
    // }

    public function sign_in(){

        return view('auth.signin');
    }

    public function sign_up(){
        return view('auth.signup');
    }

    function login()
    {
        $data = request()->validate([
            'iduser' => 'required|numeric',
            'password' => 'required|min:8',


        ], [
            'iduser.required' => 'Nim/Nip tidak boleh kosong',
            'iduser.numeric' => 'Nim/Nip harus berupa angka',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter'
        ]);


        if (Auth::attempt($data)) {

            $is_active = Auth::user()->active;


            if (!$is_active == true)
            {
                Auth::logout();
                return redirect('/');
            }
            else{
                session()->regenerate();

                return redirect('/dashboard')->with('success_message', 'Your operation was successful!');
            }
        }
        else {

            return back();
        }
    }

}
