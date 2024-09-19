<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['nombre' => 'Amazonas'],
            ['nombre' => 'Anzoátegui'],
            ['nombre' => 'Apure'],
            ['nombre' => 'Aragua'],
            ['nombre' => 'Barinas'],
            ['nombre' => 'Bolívar'],
            ['nombre' => 'Carabobo'],
            ['nombre' => 'Cojedes'],
            ['nombre' => 'Delta Amacuro'],
            ['nombre' => 'Distrito Capital'],
            ['nombre' => 'Falcón'],
            ['nombre' => 'Guárico'],
            ['nombre' => 'La Guaira'],
            ['nombre' => 'Lara'],
            ['nombre' => 'Mérida'],
            ['nombre' => 'Miranda'],
            ['nombre' => 'Monagas'],
            ['nombre' => 'Nueva Esparta'],
            ['nombre' => 'Portuguesa'],
            ['nombre' => 'Sucre'],
            ['nombre' => 'Táchira'],
            ['nombre' => 'Trujillo'],
            ['nombre' => 'Yaracuy'],
            ['nombre' => 'Zulia'],
        ];

        // Insertar los estados en la base de datos
        DB::table('estados')->insert($estados);
    }
}
