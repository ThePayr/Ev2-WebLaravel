<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'patent' => 'required|min:6|max:8|unique:vehicles,patent',
            'year' => 'required|min:4|max:4',
            'brand' => 'required',
            'model' => 'required'
        ]);
        Vehicle::create([
            'category_id' => $request->category_id,
            'patent' => $request->patent,
            'year' => $request->year,
            'brand' => $request->brand,
            'model' => $request->model
        ]);
        return redirect()->route('home');
    }

    public function delete($id){
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->route('home');
    }
}
