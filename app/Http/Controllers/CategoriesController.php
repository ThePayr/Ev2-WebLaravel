<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
        Category::create(['name' => $request->name]);
        // En ocasiones no queremos retornar una vista, más bien redireccionar a una ruta existente.
        // Cuando hacemos una redirección, el servidor procesará todo lo relacionado a esa ruta,
        // ya que es como si la estuvieramos llamando desde cero.

        // La redirección recibe el nombre que se le asigna a la ruta en el fichero de rutas.
        return redirect()->route('home');
    }
}
