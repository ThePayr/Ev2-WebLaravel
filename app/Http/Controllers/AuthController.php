<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index(){
        return View('auth.index');
    }

    function attempt(Request $request){
    }
}
