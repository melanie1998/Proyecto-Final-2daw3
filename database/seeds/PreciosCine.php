<?php

use Illuminate\Database\Seeder;

class PreciosCine extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('PreciosCine')->insert([
            'dia' => 'LUNES',
            'precio' => '7',
        ]);

        DB::table('PreciosCine')->insert([
            'dia' => 'MARTES',
            'precio' => '7',
        ]);

        DB::table('PreciosCine')->insert([
            'dia' => 'MIERCOLES',
            'precio' => '6',
        ]);

        DB::table('PreciosCine')->insert([
            'dia' => 'JUEVES',
            'precio' => '7',
        ]);

        DB::table('PreciosCine')->insert([
            'dia' => 'VIERNES',
            'precio' => '8',
        ]);

        DB::table('PreciosCine')->insert([
            'dia' => 'SABADO',
            'precio' => '8',
        ]);

        DB::table('PreciosCine')->insert([
            'dia' => 'DOMINGO',
            'precio' => '8',
        ]);

    }
}
