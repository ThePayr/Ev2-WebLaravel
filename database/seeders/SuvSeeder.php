<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Suv'
        ]);

        $vehicle_1_id = DB::table('vehicles')->insertGetId([
            'category_id' => $category->id,
            'patent' => 'ABC123',
            'year' => 2022,
            'brand' => 'Suzuki',
            'model' => 'Vitara'
        ]);

        $vehicle_2_id = DB::table('vehicles')->insertGetId([
            'category_id' => $category->id,
            'patent' => 'ABC222',
            'year' => 2010,
            'brand' => 'Chevrolet',
            'model' => 'Sail'
        ]);
    }
}
