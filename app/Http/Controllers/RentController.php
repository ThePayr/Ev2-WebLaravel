<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function listRent(){
        return View('admin.listrent');
    }

    public function newRent(){
        return View('admin.newrent');
    }
}
