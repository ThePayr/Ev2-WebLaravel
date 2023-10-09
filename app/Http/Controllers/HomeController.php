<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Rental;

class HomeController extends Controller
{
    public function index(){
        $authenticated_user = Auth::user();
        // dd($categories); // El dd es su mejor alternativa para depurar el código

        // Consulta para obtener la cantidad de vehículos en cada categoría
        $categoryCounts = Category::leftJoin('vehicles', 'categories.id', '=', 'vehicles.category_id')
            ->select('categories.name', DB::raw('COUNT(vehicles.id) as vehicle_count'))
            ->groupBy('categories.name')
            ->orderBy('categories.id')
            ->get();

        // Consulta para obtener el total de arriendos registrados
        $totalRentals = Rental::count();

        $categories = Category::with('vehicles')->orderBy('id', 'desc')->get();

        return view('admin.home')->with([
            'user' => $authenticated_user,
            'categories' => $categories,
            'categoryCounts' => $categoryCounts,
            'totalRentals' => $totalRentals,
        ]);
    }

    }


