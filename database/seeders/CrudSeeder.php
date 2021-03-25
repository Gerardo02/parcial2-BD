<?php

namespace Database\Seeders;

use App\Models\Datos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datos::create([
            'codigo' => 'El codigo',
            'descripcion' => 'Una descripcion',
            'cantidad' => 54,
            'precio' => 7856,

        ]);

        Datos::create([
            'codigo' => 'El codigo 2',
            'descripcion' => 'Una descripcion 2',
            'cantidad' => 54123,
            'precio' => 7856321,

        ]);
    }
}
