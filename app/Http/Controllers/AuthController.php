<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return View('auth.login');
    }

    public function attemptLogin(Request $request){
        dd($request->all());
    }

    public function showRegister(){
        return View('auth.register');
    }

    public function storeAccount(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
