<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function show()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = ['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success',"vous étes bien connecté .");
        }else
        {
            return back()->withErrors([
                'login' => 'Email ou mot de passe incorrect'
            ])->onlyInput('login');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login.show')->with('success','vous étes deconnect maintenent .');
    }
}
