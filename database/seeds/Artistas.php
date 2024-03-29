<?php

use Illuminate\Database\Seeder;

class Artistas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Artistas')->insert([
            'nombre' => 'Dua Lipa',
            'descripcion' => 'Dua Lipa es una cantante, modelo, compositora y diseñadora de moda​ británica de origen kosovar. Su carrera musical se inició a los 14 años, cuando comenzó a versionar canciones de otros artistas en YouTube',
            'genero' => 'Pop',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Billie Eilish',
            'descripcion' => 'Billie Eilish, la joven cantante, compositora e icono de estilo, ha generado sensación en el mercado anglo, por su corta edad (nació el 18 de diciembre de 2001) así como por su sonido moderno, su negativa a encasillarse en un género, su particular estilo de vestir y sus videos inspirados en películas y series de terror. ',
            'genero' => 'Pop',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Ed Sheeran',
            'descripcion' => 'Edward Christopher Sheeran, más conocido como Ed Sheeran, es un músico y cantante inglés​ A corta edad, comenzó a cantar en la iglesia a la que asistía y también aprendió a tocar la guitarra',
            'genero' => 'Pop',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Martin Garrix',
            'descripcion' => 'Martijn Gerard Garritsen, más conocido como Martin Garrix, ​​ es un DJ y productor neerlandés fundador del sello STMPD RCRDS.',
            'genero' => 'Electronica',
        ]);

        
        DB::table('Artistas')->insert([
            'nombre' => 'Alan Walker',
            'descripcion' => 'Alan Olav Walker es un DJ y productor noruego-británico. Entre sus más grandes éxitos se encuentran «Alone», «Faded», «The Spectre», «Sing Me To Sleep», «Ignite» y «Force»; cinco canciones que han alcanzado cientos de millones de visitas en YouTube.',
            'genero' => 'Electronica',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Avicii',
            'descripcion' => 'Tim Bergling, ​ más conocido por su nombre artístico Avicii, fue un DJ y compositor sueco, especializado en programación de audio, remezcla y producción de discos.​A los 16 años, comenzó a publicar sus remixes en foros de música electrónica, lo que lo llevó a su primer contrato discográfico.',
            'genero' => 'Electronica',
        ]);

        
        DB::table('Artistas')->insert([
            'nombre' => 'The 1975',
            'descripcion' => 'The 1975 es una banda de rock alternativo formada en Wilmslow, Cheshire, Reino Unido en 2002. Actualmente con ubicación en Manchester. La banda está conformada por cuatro miembros: Matthew Healy, Adam Hann, George Daniel y Ross MacDonald.',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Coldplay',
            'descripcion' => 'Coldplay es una banda británica de pop rock y rock alternativo formada en Londres en 1996.​​ El grupo está integrado por Chris Martin, Jon Buckland, Guy Berryman y Will Champion.',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Artic Monkeys',
            'descripcion' => 'Arctic Monkeys, es una banda británica de rock, formada en Sheffield, Reino Unido.​ El grupo está compuesto por el guitarrista principal y vocalista Alex Turner, el guitarrista Jamie Cook, el baterista Matt Helders, y con Nick O.Malley en el bajo.',
            'genero' => 'Indie Alternative',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Bad Bunny',
            'descripcion' => 'Benito Antonio Martínez Ocasio, más conocido por su nombre artístico Bad Bunny, es un cantante y rapero puertorriqueño de género reguetón y trap. Conocido por sus temas «Soy peor», «Chambea», «Amorfoda», «Callaíta» y más recientemente «Yo perreo sola».',
            'genero' => 'Latino',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Luis Fonsi',
            'descripcion' => 'Luis Alfonso Rodríguez López-Cepero, conocido artísticamente como Luis Fonsi, es un cantante, compositor y actor puertorriqueño.',
            'genero' => 'Latino',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Karol G',
            'descripcion' => 'Carolina Giraldo Navarro, más conocida por su nombre artístico Karol G, es una cantante y compositora colombiana.',
            'genero' => 'Latino',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Miranda',
            'descripcion' => 'Miranda es un rapero Madrileño de las afueras de Madrid, se sabe poco de el pero poco a poco se va haciendo un hueco en la escena con canciones punteras como Adios, Silencio o Amapolas.​',
            'genero' => 'Rap',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Post Malone',
            'descripcion' => 'Austin Richard Post más conocido por su nombre artístico Post Malone, es un rapero, cantante, productor y compositor estadounidense.​ Ganó un gran reconocimiento en agosto de 2015 gracias al lanzamiento de su sencillo debut «White Iverson».',
            'genero' => 'Rap',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Hard GZ',
            'descripcion' => 'Pedro Ruibal Iglesias (AKA Hard GZ), nacido en Vigo en 1995, creció en A Coruña, donde entró en contacto con el hip hop y rap. Con 14 años montó su primer estudio casero y comenzó a rapear en la banda Urban Style Crew, donde se rodeaba tanto de DJs y MCs como de grafiteros.',
            'genero' => 'Rap',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'C Tangana',
            'descripcion' => 'Antón Álvarez Alfaro, más conocido como C. Tangana, es un rapero español.​​​ Comenzó su carrera musical en 2006 bajo el pseudónimo de Crema, ​ siendo integrante del grupo Agorazein junto con Algeron Díaz, Sticky M.A., Jerv. Agz, Fabianni e I-Ace.',
            'genero' => 'Trap',
        ]);

        DB::table('Artistas')->insert([
            'nombre' => 'Duki',
            'descripcion' => 'Duki comenzó a tener interés por el Trap hip hop a la edad de siete años. Escuchaba mucha variedad musical, pero sobre todo rap estadounidense, algo que le influyó de cara al futuro.2​ El freestyle llamó su atención después de ver una batalla entre Arkano y Skone, y en 2013 empezó a concursar en diferentes competiciones.',
            'genero' => 'Trap',
        ]);

        
        DB::table('Artistas')->insert([
            'nombre' => 'J Balvin',
            'descripcion' => 'José Álvaro Osorio Balvín conocido como J Balvin, es un cantante colombiano de música urbana, que ha logrado posicionarse tanto en el mercado musical hispano como el anglosajón, llegando a colocar sus temas en número uno, en varias listas musicales, entre ellas Billboard.​',
            'genero' => 'Trap',
        ]);

      


    }
}
