<?php

use Illuminate\Database\Seeder;

class Series extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'titulo' => 'Prison Break',
            'tituloSinEspacios' => 'PrisonBreak',
            'sinopsis' => 'Un hombre trama una elaborada trampa para sacar a su hermano de prisión.',
            'temporadas' => '5 temporadas',
            'anio' => '2005',
            'genero' => 'Accion',
        ]);

        DB::table('series')->insert([
            'titulo' => '9-1-1',
            'tituloSinEspacios' => '9-1-1',
            'sinopsis' => 'Un programa que muestra las vidas de policías, bomberos y paramédicos de Los Ángeles, quienes son los que acuden en primera instancia cuando ocurre una tragedia, situaciones que a menudo pueden ser impredecibles y que ponen en riesgo sus vidas.',
            'temporadas' => '3 temporadas',
            'anio' => '2018',
            'genero' => 'Accion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'The Witcher',
            'tituloSinEspacios' => 'TheWitcher',
            'sinopsis' => 'El brujo Geralt, un cazador de monstruos, trata de encontrar su lugar en un mundo en el que las personas suelen ser más malvadas que las bestias.',
            'temporadas' => '1 temporada',
            'anio' => '2019',
            'genero' => 'Accion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Vikingos',
            'tituloSinEspacios' => 'Vikingos',
            'sinopsis' => 'Las aventuras de Ragnar Lothbrok, un vikingo agricultor, mientras asciende para convertirse en el rey de los vikingos.',
            'temporadas' => '5 temporada',
            'anio' => '2013',
            'genero' => 'Accion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'The Flash',
            'tituloSinEspacios' => 'TheFlash',
            'sinopsis' => "Nueve meses después de que el laboratorio S.T.A.R. explotara, Barry despierta del coma y descubre que tiene el poder de la súper velocidad. Con la ayuda de su nuevo equipo, Barry, denominado ahora `Flash', luchará contra el crimen en Ciudad Central.",
            'temporadas' => '5 temporada',
            'anio' => '2014',
            'genero' => 'Accion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Los 100',
            'tituloSinEspacios' => 'Los100',
            'sinopsis' => 'Un apocalipsis nuclear destruye la vida humana en la Tierra. Los únicos supervivientes son los habitantes de las estaciones espaciales internacionales. Tres generaciones después, la escasez de recursos los obliga a tomar medidas desesperadas.',
            'temporadas' => '7 temporadas',
            'anio' => '2014',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Outlander',
            'tituloSinEspacios' => 'Outlander',
            'sinopsis' => 'Luego de servir como enfermera del Ejército británico en la Segunda Guerra Mundial, Claire Randall disfruta de una segunda luna de miel en Escocia con su esposo, pero de repente es transportada a 1743, donde se ven amenazadas su libertad y su vida.',
            'temporadas' => '5 temporadas',
            'anio' => '2014',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'El cuento de la criada',
            'tituloSinEspacios' => 'Elcuentodelacriada',
            'sinopsis' => 'Debido a la baja tasa de natalidad, las mujeres fértiles son consideradas como criadas y son enviadas a las casas de los comandantes, altos cargos del gobierno. Allí son sometidas a violaciones hasta quedar embarazadas.',
            'temporadas' => '3 temporadas',
            'anio' => '2017',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Orphan Black',
            'tituloSinEspacios' => 'OrphanBlack',
            'sinopsis' => 'Una forastera huérfana atestigua el suicidio de una mujer y decide asumir su identidad.',
            'temporadas' => '2 temporadas',
            'anio' => '2013',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'El Mandaloriano',
            'tituloSinEspacios' => 'ElMandaloriano',
            'sinopsis' => 'Las aventuras de Mando, un pistolero solitario y cazarrecompensas que se abre paso a través de las fronteras más remotas de la galaxia, lejos de la jurisdicción de la Nueva República.',
            'temporadas' => '1 temporadas',
            'anio' => '2019',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Pretty Little Liars',
            'tituloSinEspacios' => 'PrettyLittleLiars',
            'sinopsis' => 'Han pasado tres años desde la desaparición de Alison. Spencer, Aria, Hanna y Emily ahora en la escuela secundaria, tienen un nuevo reto: los mensajes anónimos que reciben, amenazando con contar todos sus secretos.',
            'temporadas' => '7 temporadas',
            'anio' => '2010',
            'genero' => 'Drama',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Sex Education',
            'tituloSinEspacios' => 'SexEducation',
            'sinopsis' => 'Otis siempre tiene una respuesta respecto al sexo. Otis se une a su amiga Maeve para abrir una clínica de terapia sexual en la escuela.',
            'temporadas' => '2 temporadas',
            'anio' => '2019',
            'genero' => 'Drama',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Anatomia de Grey',
            'tituloSinEspacios' => 'AnatomiadeGrey',
            'sinopsis' => 'Merdith Grey pertenece a un grupo de doctores jóvenes que comienzan a trabajar en el hospital de Seattle, quienes tratan de equilibrar la vida personal y el trabajo.',
            'temporadas' => '16 temporadas',
            'anio' => '2005',
            'genero' => 'Drama',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Juego de tronos',
            'tituloSinEspacios' => 'Juegodetronos',
            'sinopsis' => 'Esta serie, basada en los libros de George R.R. Martin, muestra la competencia entre familias nobles de siete reinos de Westeros, cuya finalidad es ganar el control sobre el Trono de Hierro.',
            'temporadas' => '8 temporadas',
            'anio' => '2011',
            'genero' => 'Drama',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Dark',
            'tituloSinEspacios' => 'Dark',
            'sinopsis' => 'La desaparición de dos niños muestra los vínculos entre cuatro familias y expone el pasado de una pequeña ciudad.',
            'temporadas' => '2 temporadas',
            'anio' => '2017',
            'genero' => 'Drama',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Vis a vis',
            'tituloSinEspacios' => 'Visavis',
            'sinopsis' => 'Macarena es una joven frágil e inocente que entra en la cárcel a la espera de juicio por un delito de malversación. En prisión, se adentrará en un mundo peligroso, completamente diferente a lo que conocía, que la obligará a evolucionar a la fuerza.',
            'temporadas' => '4 temporadas',
            'anio' => '2015',
            'genero' => 'Suspense',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Stranger Things',
            'tituloSinEspacios' => 'StrangerThings',
            'sinopsis' => 'Cuando un niño desaparece, sus amigos, la familia y la policía se ven envueltos en una serie de eventos misteriosos al tratar de encontrarlo. Su ausencia coincide con el avistamiento de una criatura terrorífica y la aparición de una extraña niña.',
            'temporadas' => '3 temporadas',
            'anio' => '2016',
            'genero' => 'Suspense',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Black Mirror',
            'tituloSinEspacios' => 'BlackMirror',
            'sinopsis' => 'El lado oscuro de la era tecnológica en la que se vive: la paranoia de ser vigilados como en un panóptico, los usos terroristas de las nuevas herramientas y su relación con la experiencia cotidiana.',
            'temporadas' => '5 temporadas',
            'anio' => '2011',
            'genero' => 'Suspense',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Homeland',
            'tituloSinEspacios' => 'Homeland',
            'sinopsis' => 'Cuando el sargento del Cuerpo de Marines, Nicholas Brody regresa a casa, 8 años después de su desaparición en Irak, Carrie Mathison, una agente de la CIA, sospecha que puede ser un traidor que estaría preparando un ataque secreto contra los EE. UU.',
            'temporadas' => '7 temporadas',
            'anio' => '2011',
            'genero' => 'Suspense',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Elite',
            'tituloSinEspacios' => 'Elite',
            'sinopsis' => 'Las Encinas es el colegio más exclusivo de España, el lugar donde estudian los hijos de la élite y donde acaban de ser admitidos tres jóvenes de clase baja, procedentes de un colegio público en ruinas.',
            'temporadas' => '3 temporadas',
            'anio' => '2018',
            'genero' => 'Suspense',
        ]);
        
        DB::table('series')->insert([
            'titulo' => 'Genio del mal',
            'tituloSinEspacios' => 'Geniodelmal',
            'sinopsis' => 'El programa investiga la historia real de un repartidor de pizza que robó un banco y luego fue asesinado por una bomba atada al cuello.',
            'temporadas' => '1 temporada',
            'anio' => '2018',
            'genero' => 'Documental',
        ]);

        DB::table('series')->insert([
            'titulo' => 'A los gatos ni tocarlos Un asesino en internet',
            'tituloSinEspacios' => 'AlosgatosnitocarlosUnasesinoeninternet',
            'sinopsis' => 'Los horripilantes vídeos de un criminal pervertido llevan a un grupo de investigadores amateur a iniciar una peligrosa búsqueda en Internet para dar con él.',
            'temporadas' => '1 temporada',
            'anio' => '2019',
            'genero' => 'Documental',
        ]);

        DB::table('series')->insert([
            'titulo' => 'La mente de un asesino Aaron Hernandez',
            'tituloSinEspacios' => 'LamentedeunasesinoAaronHernandez',
            'sinopsis' => 'A través de entrevistas con amigos, jugadores y expertos, se examina cómo Aaron Hernández pasó de ser una estrella de la NFL a ser un asesino convicto.',
            'temporadas' => '1 temporada',
            'anio' => '2020',
            'genero' => 'Documental',
        ]);

        DB::table('series')->insert([
            'titulo' => 'El caso Alcàsser',
            'tituloSinEspacios' => 'ElcasoAlcàsser',
            'sinopsis' => 'The Alcàsser Murders es una serie de televisión documental española sobre crímenes reales que se estrenó en Netflix el 14 de junio de 2019 dirigida por Elías León y protagonizada por Luisa Gómez, Martín García y Fernando García.',
            'temporadas' => '1 temporada',
            'anio' => '2019',
            'genero' => 'Documental',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Wild Wild Country',
            'tituloSinEspacios' => 'WildWildCountry',
            'sinopsis' => 'Un controvertido líder de culto construye una ciudad utópica en el desierto de Oregón. El conflicto con los lugareños se convierte en un escándalo nacional.',
            'temporadas' => '1 temporada',
            'anio' => '2018',
            'genero' => 'Documental',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Big bang theory',
            'tituloSinEspacios' => 'Bigbangtheory',
            'sinopsis' => 'Leonard y Sheldon son dos cerebros privilegiados que no tienen ni la menor idea de cómo relacionarse socialmente, sobre todo cuando se trata de chicas. Sin embargo, una nueva vecina llamada Penny llega al edificio para cambiarles la vida.',
            'temporadas' => '12 temporadas',
            'anio' => '2007',
            'genero' => 'Comedia',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Orange Is the New Black',
            'tituloSinEspacios' => 'OrangeIstheNewBlack',
            'sinopsis' => 'Piper Chapman pasa un año en una cárcel de mujeres como resultado de sus negocios con el tráfico de drogas.',
            'temporadas' => '6 temporadas',
            'anio' => '2013',
            'genero' => 'Comedia',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Friends',
            'tituloSinEspacios' => 'Friends',
            'sinopsis' => 'Las aventuras de seis jóvenes neoyorquinos unidos por una divertida amistad. Entre el amor, el trabajo y la familia, comparten sus alegrías y preocupaciones en el Central Perk, su café favorito.',
            'temporadas' => '10 temporadas',
            'anio' => '1994',
            'genero' => 'Comedia',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Los Simpson',
            'tituloSinEspacios' => 'LosSimpson',
            'sinopsis' => 'En Springfield, los Simpson, una familia de clase trabajadora compuesta por Marge, Homero, Bart, Lisa y Maggie, vive aventuras satíricas.',
            'temporadas' => '30 temporadas',
            'anio' => '1989',
            'genero' => 'Comedia',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Shin-chan',
            'tituloSinEspacios' => 'Shinchan',
            'sinopsis' => 'Crayon Shin-chan es una serie de manga escrita e ilustrada por Yoshito Usui, centrada en la vida de Shin-chan, un niño de cinco años particularmente travieso, ingenioso e inteligente. El manga está inconcluso, debido al fallecimiento de su autor, cuya muerte fue confirmada el 20 de septiembre de 2009.',
            'temporadas' => '25 temporadas',
            'anio' => '1992',
            'genero' => 'Comedia',
        ]);

        DB::table('series')->insert([
            'titulo' => 'La maldicion de Hill House',
            'tituloSinEspacios' => 'LamaldiciondeHillHouse',
            'sinopsis' => 'Veinte años después, debido a una tragedia, un grupo de hermanos regresa con su padre a la casa embrujada donde crecieron y en la que se suicidó su madre. ¿O acaso no fue un suicidio?',
            'temporadas' => '2 temporadas',
            'anio' => '2018',
            'genero' => 'Terror',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Marianne',
            'tituloSinEspacios' => 'Marianne',
            'sinopsis' => 'Una famosa escritora vuelve a su ciudad natal y descubre que el espíritu maligno que invade sus sueños está causando estragos en el mundo real.',
            'temporadas' => '1 temporada',
            'anio' => '2019',
            'genero' => 'Terror',
        ]);

        DB::table('series')->insert([
            'titulo' => 'Supernatural',
            'tituloSinEspacios' => 'Supernatural',
            'sinopsis' => 'Dos hermanos luchan contra fantasmas, demonios y todas las potestades del mal, después que el cielo y el infierno dejan un caos luego de una serie de eventos apocalípticos, donde monstruos, ángeles y demonios deambulan en el caótico territorio.',
            'temporadas' => '14 temporadas',
            'anio' => '2015',
            'genero' => 'Terror',
        ]);

        DB::table('series')->insert([
            'titulo' => 'American Horror Story',
            'tituloSinEspacios' => 'AmericanHorrorStory',
            'sinopsis' => 'Una familia de tres se muda de Boston a Los Ángeles para reconciliar su doloroso pasado.',
            'temporadas' => '9 temporadas',
            'anio' => '2011',
            'genero' => 'Terror',
        ]);

        DB::table('series')->insert([
            'titulo' => 'The Walking Dead',
            'tituloSinEspacios' => 'TheWalkingDead',
            'sinopsis' => 'Tras estar en estado de coma, el expolicía Rick Grimes, descubre que una enfermedad originó un apocalipsis zombi. Rick liderará un grupo de sobrevivientes para buscar un lugar seguro, pero las luchas más peligrosas surgirán entre ellos mismos.',
            'temporadas' => '10 temporadas',
            'anio' => '2010',
            'genero' => 'Terror',
        ]);
    }
}
