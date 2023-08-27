<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all());
    }
}
