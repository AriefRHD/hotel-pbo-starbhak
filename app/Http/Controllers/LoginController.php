<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if ($user = Auth::user()) {
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }elseif($user->level == 'tamu'){
                return redirect()->intended('tamu');
            }elseif($user->level == 'resepsionis'){
                return redirect()->intended('resepsionis');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request){
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        $kredensil = $request->only('username','password');

        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }elseif($user->level == 'tamu'){
                return redirect()->intended('tamu');
            }elseif($user->level == 'resepsionis'){
                return redirect()->intended('resepsionis');
            }
            return redirect()->intended('/');
        }
        return redirect('/');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
