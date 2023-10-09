<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Rental;
class RentController extends Controller
{
    public function listRent(){
              // Consulta para obtener los datos de arriendos
              $rentals = Rental::all();

              return view('admin.listrent', ['rentals' => $rentals]);
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
