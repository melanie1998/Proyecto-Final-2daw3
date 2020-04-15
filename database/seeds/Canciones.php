<?php

use Illuminate\Database\Seeder;

class Canciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('Canciones')->insert([
            'titulo' => 'Physical',
            'artista' => 'Dua Lipa',
            'duracion' => '3:14',
            'genero' => 'pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Yo Perreo Sola',
            'artista' => 'Bad Bunny',
            'duracion' => '2:52',
            'genero' => 'latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Used To Love',
            'artista' => 'Martin Garrix',
            'duracion' => '3:57',
            'genero' => 'electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Latidos',
            'artista' => 'Miranda',
            'duracion' => '3:09',
            'genero' => 'rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Cambios',
            'artista' => 'Hard GZ',
            'duracion' => '3:09',
            'genero' => 'rap',
        ]);


        DB::table('Canciones')->insert([
            'titulo' => 'Bad Guy',
            'artista' => 'Billie Eilish',
            'duracion' => '3:14',
            'genero' => 'pop',
        ]);

        
        DB::table('Canciones')->insert([
            'titulo' => 'Perfect',
            'artista' => 'Ed Sheeran',
            'duracion' => '4:23',
            'genero' => 'pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Despacito',
            'artista' => 'Luis Fonsi',
            'duracion' => '3:49',
            'genero' => 'latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Goteo',
            'artista' => 'Duki',
            'duracion' => '2:44',
            'genero' => 'trap',
        ]);
    }
}
