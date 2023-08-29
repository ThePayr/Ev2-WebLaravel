<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        // Obtiene al usuario autenticado
        $authenticated_user = Auth::user();
        // Retorna la vista ubicada en admin.home y con with le pasamos
        // la variable a la plantilla, la clave es el nombre de la variable
        // que estará disponible en la plantilla.
        return View('admin.home')->with(['user' => $authenticated_user]);
    }
}
