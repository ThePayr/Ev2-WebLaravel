<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PickupTruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Camioneta'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'KL1234',
            'year' => 2017,
            'brand' => 'Ford',
            'model' => 'F-150'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'MN5678',
            'year' => 2019,
            'brand' => 'Chevrolet',
            'model' => 'Silverado'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'OP9012',
            'year' => 2020,
            'brand' => 'Toyota',
            'model' => 'Tacoma'
        ]);
    }
}
