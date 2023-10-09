<?php

namespace Database\Seeders;
use App\Models\Rental;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicle = Vehicle::where([
            'patent' => 'KL1234'
        ])->first();

        if($vehicle){
            Rental::create([
                'name' => 'Carlos',
                'last_name' => 'Santana',
                'second_last_name' => 'Leal',
                'rut' => '12345678-k',
                'email' => 'csantana@email.com',
                'patent' => $vehicle->patent,
                'start_date' => '2023-01-01',
                'return_date' => '2023-01-23',
            ]);
        }
    }
}
