<?php

use Illuminate\Database\Seeder;

class ConciertosDisponibles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ConciertosDisponibles')->insert([
            'lugar' => 'Wizik Center',
            'artista' => 'Ed Sheeran',
            'fecha' => 'Martes, 16 de Junio 2020',
            'hora' => '21:00',
            'numEntradas' => 15500,
            'entradasDisponibles' => 15500,
            'entradasCompradas' => 0, 
        ]);

        DB::table('ConciertosDisponibles')->insert([
            'lugar' => 'Palau Sant Jordi',
            'artista' => 'Hard GZ',
            'fecha' => 'Martes, 30 de Junio 2020',
            'hora' => '21:00',
            'numEntradas' => '18000',
            'entradasDisponibles' => 18000,
            'entradasCompradas' => 0, 
        ]);

        DB::table('ConciertosDisponibles')->insert([
            'lugar' => 'Bilbao Arena',
            'artista' => 'The 1975',
            'fecha' => 'Martes, 12 de Julio 2020',
            'hora' => '21:00',
            'numEntradas' => '10000',
            'entradasDisponibles' => 10000,
            'entradasCompradas' => 0, 
        ]);

        DB::table('ConciertosDisponibles')->insert([
            'lugar' => 'Estadio de la Cartuja',
            'artista' => 'Bad Bunny',
            'fecha' => 'Martes, 16 de Junio 2020',
            'hora' => '21:00',
            'numEntradas' => 55000,
            'entradasDisponibles' => 55000,
            'entradasCompradas' => 0, 
        ]);

    }
}
