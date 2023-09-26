<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportsCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Deportivo'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'EF1234',
            'year' => 2023,
            'brand' => 'Porsche',
            'model' => '911'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'GH5678',
            'year' => 2022,
            'brand' => 'Chevrolet',
            'model' => 'Corvette'
        ]);
    }
}
