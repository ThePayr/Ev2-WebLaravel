<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vehicle;
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

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'OP1234',
            'year' => 2022,
            'brand' => 'Jeep',
            'model' => 'Grand Cherokee'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'QR5678',
            'year' => 2021,
            'brand' => 'Subaru',
            'model' => 'Outback'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'ST9012',
            'year' => 2020,
            'brand' => 'Ford',
            'model' => 'Explorer'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'UV3456',
            'year' => 2019,
            'brand' => 'Toyota',
            'model' => 'RAV4'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'WX7890',
            'year' => 2018,
            'brand' => 'Honda',
            'model' => 'CR-V'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'AB6789',
            'year' => 2020,
            'brand' => 'Nissan',
            'model' => 'Rogue'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'CD4567',
            'year' => 2021,
            'brand' => 'Mazda',
            'model' => 'CX-5'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'EF2345',
            'year' => 2017,
            'brand' => 'Kia',
            'model' => 'Sportage'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'ZH3456',
            'year' => 2019,
            'brand' => 'Hyundai',
            'model' => 'Tucson'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'IJ4567',
            'year' => 2018,
            'brand' => 'Chevrolet',
            'model' => 'Equinox'
        ]);
    }
}
