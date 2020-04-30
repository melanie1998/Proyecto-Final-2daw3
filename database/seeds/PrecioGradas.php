<?php

use Illuminate\Database\Seeder;

class PrecioGradas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        DB::table('PrecioGradas')->insert([
            'lugar' => 'Wizik Center',
            'numeroGrada' => 1,
            'artista' => 'Ed Sheeran',
            'entradasDisponibles' => 2500,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Wizik Center',
            'numeroGrada' => 2,
            'artista' => 'Ed Sheeran',
            'entradasDisponibles' => 2500,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Wizik Center',
            'numeroGrada' => 3,
            'artista' => 'Ed Sheeran',
            'entradasDisponibles' => 2500,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Palau Sant Jordi',
            'numeroGrada' => 1,
            'artista' => 'Hard GZ',
            'entradasDisponibles' => 3000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Palau Sant Jordi',
            'numeroGrada' => 2,
            'artista' => 'Hard GZ',
            'entradasDisponibles' => 3000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Palau Sant Jordi',
            'numeroGrada' => 3,
            'artista' => 'Hard GZ',
            'entradasDisponibles' => 3000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Bilbao Arena',
            'numeroGrada' => 1,
            'artista' => 'The 1975',
            'entradasDisponibles' => 2000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Bilbao Arena',
            'numeroGrada' => 2,
            'artista' => 'The 1975',
            'entradasDisponibles' => 2000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Bilbao Arena',
            'numeroGrada' => 3,
            'artista' => 'The 1975',
            'entradasDisponibles' => 2000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Estadio de la Cartuja',
            'numeroGrada' => 1,
            'artista' => 'Bad Bunny',
            'entradasDisponibles' => 5000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Estadio de la Cartuja',
            'numeroGrada' => 2,
            'artista' => 'Bad Bunny',
            'entradasDisponibles' => 5000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);

        DB::table('PrecioGradas')->insert([
            'lugar' => 'Estadio de la Cartuja',
            'numeroGrada' => 3,
            'artista' => 'Bad Bunny',
            'entradasDisponibles' => 5000,
            'entradasCompradas' => 0,
            'precio' => 40,   
        ]);
    }
}
