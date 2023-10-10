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

    public function showNewRent()
    {
        $vehicles = Vehicle::whereDoesntHave('rentals')->get();
        $availableVehicles = Vehicle::whereDoesntHave('rentals')->get();
        return View('admin.newrent')->with([
            'vehicles' => $vehicles,
            'availableVehicles' => $availableVehicles,
        ]);
    }

    public function createNewRent(Request $request)
    {
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
        // Verifica si existen arriendos que se superponen con las fechas proporcionadas
        $start_date = $request->input('fecha_entrega');
        $return_date = $request->input('fecha_devolucion');

        $overlappingRentals = Rental::where(function ($query) use ($start_date, $return_date) {
            $query->whereBetween('start_date', [$start_date, $return_date])
                ->orWhereBetween('return_date', [$start_date, $return_date])
                ->orWhere(function ($query) use ($start_date, $return_date) {
                    $query->where('start_date', '<=', $start_date)
                        ->where('return_date', '>=', $return_date);
                });
        })->get();

        // Si existen arriendos que se superponen, muestra un mensaje de error
        if ($overlappingRentals->count() > 0) {
            return redirect()->route('newrent')->with('error', 'Las fechas ya están ocupadas por otros arriendos.');
        }
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
