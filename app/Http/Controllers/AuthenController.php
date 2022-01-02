<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $email = $request->email;
        $password = $request->password;
        $rememberMe = $request->rememberme;
        $ischecked = false;

        if($rememberMe){
            $ischecked = true;
        }

        if(Auth::attempt(['email' => $email, 'password' => $password], $ischecked)){
            return redirect()->intended('/crud');
        }

        return back();

    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
