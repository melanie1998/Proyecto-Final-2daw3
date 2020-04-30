<?php

use Illuminate\Database\Seeder;

class PrecioPistaA extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('PrecioPistaA')->insert([
            'lugar' => 'Wizik Center',
            'artista' => 'Ed Sheeran',
            'entradasDisponibles' => 4000,
            'entradasCompradas' => 0,
            'precio' => 89,   
        ]);

        DB::table('PrecioPistaA')->insert([
            'lugar' => 'Palau Sant Jordi',
            'artista' => 'Hard GZ',
            'entradasDisponibles' => 4500,
            'entradasCompradas' => 0,
            'precio' => 80,   
        ]);

        DB::table('PrecioPistaA')->insert([
            'lugar' => 'Bilbao Arena',
            'artista' => 'The 1975',
            'entradasDisponibles' => 3000,
            'entradasCompradas' => 0,
            'precio' => 80,   
        ]);

        DB::table('PrecioPistaA')->insert([
            'lugar' => 'Estadio de la Cartuja',
            'artista' => 'Bad Bunny',
            'entradasDisponibles' => 20000,
            'entradasCompradas' => 0,
            'precio' => 80,   
        ]);
    }
}
