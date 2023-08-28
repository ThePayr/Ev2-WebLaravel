<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin(){
        return View('auth.login');
    }

    function attemptLogin(Request $request){
        dd($request->all());
    }

    function showRegister(){
        return View('auth.register');
    }

    function storeAccount(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|integer',
        ]);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        Auth::login($user);
        dd(Auth::user(), bcrypt('encriptar_esta_contraseña'));
    }
}
