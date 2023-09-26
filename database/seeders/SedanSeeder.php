<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Sedán'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'UV1234',
            'year' => 2022,
            'brand' => 'Honda',
            'model' => 'Accord'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'WX5678',
            'year' => 2019,
            'brand' => 'Toyota',
            'model' => 'Camry'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'YZ9012',
            'year' => 2020,
            'brand' => 'Hyundai',
            'model' => 'Sonata'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'AB3456',
            'year' => 2018,
            'brand' => 'Volkswagen',
            'model' => 'Passat'
        ]);
    }
}
