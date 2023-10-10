<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Rental;

class RentController extends Controller
{
    public function listRent(){
              // Consulta para obtener los datos de arriendos
              $rentals = Rental::with('vehicle')->get();

              return view('admin.listrent', ['rentals' => $rentals]);
    }

    public function showNewRent(){
        $vehicles = Vehicle::whereDoesntHave('rentals')->get();
        $availableVehicles = Vehicle::whereDoesntHave('rentals')->get();
        return View('admin.newrent')->with([
            'vehicles' => $vehicles,
            'availableVehicles' => $availableVehicles,
        ]);
    }

    public function createNewRent(Request $request){
        $request->validate([
            'names' => 'required',
            'last_name' => 'required',
            'second_last_name' => 'required',
            'rut' => 'required',
            'email' => 'required|email',
            'patent' => 'required',
            'fecha_entrega' => 'required|date',
            'fecha_devolucion' => 'required|date',
        ]);

        // Crea un nuevo arrendatario en la base de datos
        Rental::create([
            'name' => $request->input('names'),
            'last_name' => $request->input('last_name'),
            'second_last_name' => $request->input('second_last_name'),
            'rut' => $request->input('rut'),
            'email' => $request->input('email'),
            'patent' => $request->input('patent'),
            'start_date' => $request->input('fecha_entrega'),
            'return_date' => $request->input('fecha_devolucion'),
        ]);

        return redirect()->route('listrent'); // Redirecciona a la lista de arriendos o a donde desees
    }

}
