<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $authenticated_user = Auth::user();
        // dd($categories); // El dd es su mejor alternativa para depurar el código
        $categories = Category::with('vehicles')->orderBy('id', 'desc')->get();
        return View('admin.home')->with([
            'user' => $authenticated_user,
            'categories' => $categories
        ]);

    }

}
