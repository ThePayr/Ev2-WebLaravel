<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function listRent(){
        return View('admin.listrent');
    }

    public function newRent(){
        $vehicles = Vehicle::whereDoesntHave('rentals')->get();
        $vehiclesNotRelated = Vehicle::whereDoesntHave('rentals')->get();
        return View('admin.newrent')->with([
            'vehicles' => $vehicles,
            'vehiclesNotRelated' => $vehiclesNotRelated,
        ]);
    }
}
