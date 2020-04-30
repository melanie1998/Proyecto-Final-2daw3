<?php

use Illuminate\Database\Seeder;

class PrecioPistaB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        DB::table('PrecioPistaB')->insert([
            'lugar' => 'Wizik Center',
            'artista' => 'Ed Sheeran',
            'entradasDisponibles' => 4000,
            'entradasCompradas' => 0,
            'precio' => 60,   
        ]);

        DB::table('PrecioPistaB')->insert([
            'lugar' => 'Palau Sant Jordi',
            'artista' => 'Hard GZ',
            'entradasDisponibles' => 4500,
            'entradasCompradas' => 0,
            'precio' => 60,   
        ]);

        DB::table('PrecioPistaB')->insert([
            'lugar' => 'Bilbao Arena',
            'artista' => 'The 1975',
            'entradasDisponibles' => 3000,
            'entradasCompradas' => 0,
            'precio' => 60,   
        ]);

        DB::table('PrecioPistaB')->insert([
            'lugar' => 'Estadio de la Cartuja',
            'artista' => 'Bad Bunny',
            'entradasDisponibles' => 20000,
            'entradasCompradas' => 0,
            'precio' => 60,   
        ]);
    }
}
