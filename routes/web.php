<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/login'], function(){
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/', [AuthController::class, 'attemptLogin'])->name('login.attempt');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => '/register'], function(){
    Route::get('/', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/', [AuthController::class, 'storeAccount'])->name('register.store');
});

// El middleware auth verifica que el usuario esté autenticado para poder acceder a
// una ruta.Viene por defecto en laravel, si no hay un usuario autenticado redirecciona a la ruta login
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    // Ejemplo
    // $category = Category::create(['name' => 'SUV']);
    // $vehicle = Vehicle::create([
    //     'category_id' => $category->id,
    //     'patent' => 'RJRJ11',
    //     'year' => 2022,
    //     'brand' => 'Kia',
    //     'model' => 'Morning'
    // ]);
    // dd(Vehicle::with(['category'])->get());
    return view('welcome');
});
