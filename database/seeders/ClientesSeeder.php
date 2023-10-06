<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Vehicle;
class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $clientes = [
            [
                'nombre' => 'Juan',
                'rut' => '10.100.100-1',
                'patente' => 'OP1234',
                'entrega' => '2023-08-12',
                'devolucion' => '2023-08-22',
            ],
            [
                'nombre' => 'María',
                'rut' => '20.200.200-2',
                'patente' => 'QR5678',
                'entrega' => '2023-09-05',
                'devolucion' => '2023-09-15',
            ],
            // Agrega más clientes y vehículos aquí
        ];

        foreach ($clientes as $cliente) {
            // Encuentra un vehículo existente o crea uno nuevo (según tu lógica)
            $vehicle = Vehicle::where('patent', $cliente['patente'])->first();

            if (!$vehicle) {
                // Si el vehículo no existe, puedes crearlo aquí antes de vincularlo
                $vehicle = Vehicle::create([
                    'category_id' => 1, // Asigna la categoría correcta
                    'patent' => $cliente['patente'],
                    'year' => 2022, // Ajusta según corresponda
                    'brand' => 'Marca', // Ajusta según corresponda
                    'model' => 'Modelo', // Ajusta según corresponda
                ]);
            }

            // Crea un cliente y vincúlalo al vehículo
            Cliente::create([
                'nombre' => $cliente['nombre'],
                'rut' => $cliente['rut'],
                'patente' => $cliente['patente'],
                'entrega' => $cliente['entrega'],
                'devolucion' => $cliente['devolucion'],
                'vehicle_id' => $vehicle->id, // Asigna el vehículo correspondiente
            ]);
        }
    }
}
