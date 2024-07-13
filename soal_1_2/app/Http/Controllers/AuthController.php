<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function loginPage(){
        if(auth()->check()) return redirect('/');
        return view('login');
    }

    public function login(Request $request){
        if(auth()->attempt((['email' => $request->email, 'password' => $request->password]))){            
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect('/login')->withErrors('Email atau Password salah. Silahkan cek dan coba lagi!');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

}
