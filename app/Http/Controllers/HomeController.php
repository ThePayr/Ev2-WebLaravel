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
        // $categories = DB::table('categories')->get();
        // dd($categories);
        $categories = Category::withCount('vehicles')->get();
        dd($categories);
        return View('admin.home')->with([
            'user' => $authenticated_user,
            'categories' => $categories
        ]);
    }
}
