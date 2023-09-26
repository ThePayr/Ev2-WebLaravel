<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call([
            SuvSeeder::class,
            HatchbackSeeder::class,
            PickupTruckSeeder::class,
            SedanSeeder::class,
            SportsCarSeeder::class,
        ]);
    }
}
