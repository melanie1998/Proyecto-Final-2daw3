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
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => "Don't Start Now",
            'artista' => 'Dua Lipa',
            'duracion' => '3:03',
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => "Break My Heart",
            'artista' => 'Dua Lipa',
            'duracion' => '3:42',
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Bad Guy',
            'artista' => 'Billie Eilish',
            'duracion' => '3:14',
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'you should see me in a crown',
            'artista' => 'Billie Eilish',
            'duracion' => '3:01',
            'genero' => 'Pop',
        ]);


        DB::table('Canciones')->insert([
            'titulo' => "when the party's over",
            'artista' => 'Billie Eilish',
            'duracion' => '3:16',
            'genero' => 'Pop',
        ]);
        
        DB::table('Canciones')->insert([
            'titulo' => 'Perfect',
            'artista' => 'Ed Sheeran',
            'duracion' => '4:23',
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Photograph',
            'artista' => 'Ed Sheeran',
            'duracion' => '4:19',
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Barcelona',
            'artista' => 'Ed Sheeran',
            'duracion' => '3:11',
            'genero' => 'Pop',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Used To Love',
            'artista' => 'Martin Garrix',
            'duracion' => '3:57',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Scared To Be Lonely',
            'artista' => 'Martin Garrix',
            'duracion' => '3:41',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'In The Name of Love',
            'artista' => 'Martin Garrix',
            'duracion' => '3:15',
            'genero' => 'Electronica',
        ]);
        
        DB::table('Canciones')->insert([
            'titulo' => 'Lonely Together',
            'artista' => 'Avicii',
            'duracion' => '3:02',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Wake Me Up',
            'artista' => 'Avicii',
            'duracion' => '4:07',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Without You',
            'artista' => 'Avicii',
            'duracion' => '3:02',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Faded',
            'artista' => 'Alan Walker',
            'duracion' => '3:33',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'On My Way',
            'artista' => 'Alan Walker',
            'duracion' => '3:13',
            'genero' => 'Electronica',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Alone, PT. II',
            'artista' => 'Alan Walker',
            'duracion' => '2:59',
            'genero' => 'Electronica',
        ]);

        
        DB::table('Canciones')->insert([
            'titulo' => 'The Scientist',
            'artista' => 'Coldplay',
            'duracion' => '5:10',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Yellow',
            'artista' => 'Coldplay',
            'duracion' => '4:27',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Viva La Vida',
            'artista' => 'Coldplay',
            'duracion' => '4:02',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Robbers',
            'artista' => 'The 1975',
            'duracion' => '4:15',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'I Like America & America Likes Me',
            'artista' => 'The 1975',
            'duracion' => '3:27',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Sincerity Is Scary',
            'artista' => 'The 1975',
            'duracion' => '3:46',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Do I Wanna Know',
            'artista' => 'Artic Monkeys',
            'duracion' => '4:32',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'R U Mine',
            'artista' => 'Artic Monkeys',
            'duracion' => '3:21',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Fluorescent Adolescent',
            'artista' => 'Artic Monkeys',
            'duracion' => '3:03',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Yo Perreo Sola',
            'artista' => 'Bad Bunny',
            'duracion' => '2:52',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Safaera',
            'artista' => 'Bad Bunny',
            'duracion' => '4:55',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Callaita',
            'artista' => 'Bad Bunny',
            'duracion' => '4:11',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Despacito',
            'artista' => 'Luis Fonsi',
            'duracion' => '3:49',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Echame La Culpa',
            'artista' => 'Luis Fonsi',
            'duracion' => '2:53',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Date La Vuelta',
            'artista' => 'Luis Fonsi',
            'duracion' => '3:39',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Baila Baila Baila',
            'artista' => 'Ozuna',
            'duracion' => '2:38',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Tusa',
            'artista' => 'Karol G',
            'duracion' => '3:21',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Ocean',
            'artista' => 'Karol G',
            'duracion' => '2:35',
            'genero' => 'Latino',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Culpables',
            'artista' => 'Karol G',
            'duracion' => '3:48',
            'genero' => 'Latino',
        ]);
       

        DB::table('Canciones')->insert([
            'titulo' => 'Latidos',
            'artista' => 'Miranda',
            'duracion' => '3:09',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Lo Sabia',
            'artista' => 'Miranda',
            'duracion' => '3:19',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Destello',
            'artista' => 'Miranda',
            'duracion' => '3:36',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Cambios',
            'artista' => 'Hard GZ',
            'duracion' => '3:09',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Love',
            'artista' => 'Hard GZ',
            'duracion' => '3:08',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Cae La Noche',
            'artista' => 'Hard GZ',
            'duracion' => '4:10',
            'genero' => 'Rap',
        ]);
        
        DB::table('Canciones')->insert([
            'titulo' => 'I Fall Apart',
            'artista' => 'Post Malone',
            'duracion' => '3:43',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Circles',
            'artista' => 'Post Malone',
            'duracion' => '3:35',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Goodbyes',
            'artista' => 'Post Malone',
            'duracion' => '4:10',
            'genero' => 'Rap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Goteo',
            'artista' => 'Duki',
            'duracion' => '2:44',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => "She Don't Give a FO",
            'artista' => 'Duki',
            'duracion' => '3:29',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Cereza',
            'artista' => 'Duki',
            'duracion' => '2:44',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Rojo',
            'artista' => 'J Balvin',
            'duracion' => '2:31',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'LA CANCION',
            'artista' => 'J Balvin',
            'duracion' => '4:02',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Mi Gente',
            'artista' => 'J Balvin',
            'duracion' => '3:05',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Antes De Morirme',
            'artista' => 'C Tangana',
            'duracion' => '3:19',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Yelo',
            'artista' => 'C Tangana',
            'duracion' => '3:09',
            'genero' => 'Trap',
        ]);

        DB::table('Canciones')->insert([
            'titulo' => 'Guerrera',
            'artista' => 'C Tangana',
            'duracion' => '3:29',
            'genero' => 'Trap',
        ]);
    }
}