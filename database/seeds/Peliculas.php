<?php

use Illuminate\Database\Seeder;

class Peliculas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([
            'titulo' => 'Harry Potter y las Reliquias de la Muerte 1',
            'tituloSinEspacios' => 'HarryPotterylasReliquiasdelaMuerte1',
            'sinopsis' => 'Harry, Ron y Hermione se marchan de Hogwarts para iniciar su misión más importante: tienen que destruir los horrocruxes, el secreto del poder y la inmortalidad de Voldemort, en los que el temido mago oscuro guarda los fragmentos de su alma.',
            'duracion' => '2h 27m',
            'anio' => '2010',
            'genero' => 'Fantasia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Avatar',
            'tituloSinEspacios' => 'Avatar',
            'sinopsis' => "En un exuberante planeta llamado Pandora viven los Na'vi, seres que aparentan ser primitivos pero que en realidad son muy evolucionados.",
            'duracion' => '2h 42m',
            'anio' => '2009',
            'genero' => 'Fantasia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'El Renacido',
            'tituloSinEspacios' => 'ElRenacido',
            'sinopsis' => "El trampero Hugh Glass intenta vengarse de sus compañeros, quienes lo abandonaron herido en el bosque después de que lo atacó un oso, pensando que moriría, víctima de las lesiones y de la crudeza del entorno y del invierno",
            'duracion' => '2h 36m',
            'anio' => '2015',
            'genero' => 'Fantasia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Animales fantásticos y dónde encontrarlos',
            'tituloSinEspacios' => 'Animalesfantasticosydondeencontrarlos',
            'sinopsis' => "En 1926, el mago experto en zoología Newt Scamander hace una breve parada en Nueva York mientras viaja catalogando y capturando criaturas mágicas por el mundo.",
            'duracion' => '2h 13m',
            'anio' => '2016',
            'genero' => 'Fantasia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Avengers Endgame',
            'tituloSinEspacios' => 'AvengersEndgame',
            'sinopsis' => "Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo.",
            'duracion' => '3h 2m',
            'anio' => '2019',
            'genero' => 'Fantasia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'El Sexto Sentido',
            'tituloSinEspacios' => 'ElSextoSentido',
            'sinopsis' => 'Malcolm Crowe es un psicólogo infantil que vive obsesionado por el recuerdo de un joven al que fue incapaz de ayudar.',
            'duracion' => '1h 50m',
            'anio' => '1999',
            'genero' => 'Suspense',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Ultima Llamada',
            'tituloSinEspacios' => 'UltimaLlamada',
            'sinopsis' => 'Stu Shepart, un arrogante publicista con una carrera en ascenso, contesta una llamada en una cabina telefónica y queda a merced de un francotirador que lo observa desde algún lugar escondido.',
            'duracion' => '1h 21m',
            'anio' => '2002',
            'genero' => 'Suspense',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Contratiempo',
            'tituloSinEspacios' => 'Contratiempo',
            'sinopsis' => 'La vida del exitoso empresario Adrián Doria se vuelve una pesadilla cuando una mañana se despierta en una habitación de hotel junto al cadáver de su amante.',
            'duracion' => '1h 46m',
            'anio' => '2016',
            'genero' => 'Suspense',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Dejame Salir',
            'tituloSinEspacios' => 'DejameSalir',
            'sinopsis' => 'Chris va a conocer a los padres de Rose, su novia. Al principio se muestran encantadores, si bien un tanto nerviosos. Chris supone que se debe a que él es negro, pero un poco más tarde descubre que sus suegros ocultan un secreto espeluznante.',
            'duracion' => '1h 44m',
            'anio' => '2016',
            'genero' => 'Suspense',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Multiple',
            'tituloSinEspacios' => 'Multiple',
            'sinopsis' => 'Kevin, un hombre con 23 personalidades, secuestra a 3 chicas jóvenes y las mantiene retenidas en un sótano. A medida que una de sus personalidades va imponiéndose al resto, la vida de las chicas, y la del propio Kevin, peligra cada vez más.',
            'duracion' => '1h 57m',
            'anio' => '2016',
            'genero' => 'Suspense',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Annabelle Vuelve a Casa',
            'tituloSinEspacios' => 'AnnabelleVuelveaCasa',
            'sinopsis' => 'Ed y Lorraine Warren tratan de encerrar bajo llave a Annabelle, una muñeca poseída. Como demonólogos la colocaran en una vitrina bendecida como medida de seguridad.',
            'duracion' => '1h 46m',
            'anio' => '2019',
            'genero' => 'Terror',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Expediente Warren The Conjuring',
            'tituloSinEspacios' => 'ExpedienteWarrenTheConjuring',
            'sinopsis' => 'A principios de los años 70, Ed y Lorrain Warren, reputados investigadores de fenómenos paranormales, se enfrentan a una entidad demoníaca al intentar ayudar a una familia que está siendo aterrorizada por una presencia oscura en su aislada granja.',
            'duracion' => '1h 52m',
            'anio' => '2013',
            'genero' => 'Terror',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'La Monja',
            'tituloSinEspacios' => 'LaMonja',
            'sinopsis' => 'Una monja se suicida en una abadía rumana y el Vaticano envía a un sacerdote y una novicia a investigar lo sucedido. Lo que ambos encuentran allá es un secreto perverso que los enfrentará cara a cara con el mal en su esencia más pura.',
            'duracion' => '1h 36m',
            'anio' => '2018',
            'genero' => 'Terror',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Verónica',
            'tituloSinEspacios' => 'Veronica',
            'sinopsis' => 'En el Madrid de principios de los años 90, un grupo de amigas realizan una sesión de ouija. Al acabar, una de las adolescentes es poseída por unas presencias sobrenaturales que amenazan con hacerles daño a ella y sus familiares.',
            'duracion' => '1h 46m',
            'anio' => '2017',
            'genero' => 'Terror',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'La Mujer de Negro',
            'tituloSinEspacios' => 'LaMujerdeNegro',
            'sinopsis' => 'Arthur Kipps, un abogado, enviudó recientemente y sufre por la pérdida de su esposa cuando es enviado a una aldea remota para poner en orden los asuntos de un excéntrico fallecido. Poco tiempo después de su llegada, resulta claro que los aldeanos ocultan un terrible secreto.',
            'duracion' => '1h 35m',
            'anio' => '2012',
            'genero' => 'Terror',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Parque Jurásico',
            'tituloSinEspacios' => 'ParqueJurasico',
            'sinopsis' => 'Tres expertos y otras personas son invitados a un parque de diversiones, donde se encuentran dinosaurios creados en base al ADN.',
            'duracion' => '2h 7m',
            'anio' => '1993',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Star Wars Episodio IX - El ascenso de Skywalker',
            'tituloSinEspacios' => 'StarWarsEpisodioIXElascensodeSkywalker',
            'sinopsis' => 'La Resistencia sobreviviente se enfrenta a la Primera Orden, y Rey, Finn, Poe y el resto de los héroes encararán nuevos retos y una batalla final con la sabiduría de las generaciones anteriores.',
            'duracion' => '2h 22m',
            'anio' => '2019',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'El Origen',
            'tituloSinEspacios' => 'ElOrigen',
            'sinopsis' => 'Dom Cobb es un ladrón con una extraña habilidad para entrar a los sueños de la gente y robarles los secretos de sus subconscientes. Su habilidad lo ha vuelto muy popular en el mundo del espionaje corporativo.',
            'duracion' => '2h 28m',
            'anio' => '2010',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Gravity',
            'tituloSinEspacios' => 'Gravity',
            'sinopsis' => 'La doctora Ryan Stone es una ingeniera médica en su primera misión espacial. Su comandante es el veterano Matt Kowalsky, en su último viaje antes de retirarse. Una caminata espacial de rutina se convierte en un desastre y la nave queda destruida, dejando a Ryan y Matt atrapados en el espacio.',
            'duracion' => '1h 31m',
            'anio' => '2013',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'WALL-E',
            'tituloSinEspacios' => 'WALLE',
            'sinopsis' => 'Luego de pasar años limpiando la Tierra desierta, el robot Wall-E conoce a EVA y la sigue por toda la galaxia.',
            'duracion' => '1h 43m',
            'anio' => '2008',
            'genero' => 'Ciencia Ficcion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Joker',
            'tituloSinEspacios' => 'Joker',
            'sinopsis' => 'Arthur Fleck adora hacer reír a la gente, pero su carrera como comediante es un fracaso. El repudio social, la marginación y una serie de trágicos acontecimientos lo conducen por el sendero de la locura y, finalmente, cae en el mundo del crimen.',
            'duracion' => '2h 2m',
            'anio' => '2019',
            'genero' => 'Drama',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'El pianista',
            'tituloSinEspacios' => 'Elpianista',
            'sinopsis' => 'Un judío polaco, pianista profesional, lucha por la supervivencia en Varsovia frente a la invasión nazi. Después de, gracias a unos amigos, haber evitado la deportación, el pianista debe vivir oculto y constantemente expuesto al peligro.',
            'duracion' => '2h 30m',
            'anio' => '2002',
            'genero' => 'Drama',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Cadena Perpetua',
            'tituloSinEspacios' => 'CadenaPerpetua',
            'sinopsis' => 'Un hombre inocente es enviado a una corrupta penitenciaria de Maine en 1947 y sentenciado a dos cadenas perpetuas por un doble asesinato.',
            'duracion' => '2h 22m',
            'anio' => '1994',
            'genero' => 'Drama',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Roma',
            'tituloSinEspacios' => 'Roma',
            'sinopsis' => 'En la colonia Roma, de Ciudad de México, dos empleadas domésticas ayudan a una madre a criar a sus cuatro hijos durante las largas ausencias de su esposo. Una de las jóvenes, Cleo, se hace cargo de los niños como si fueran propios, a pesar de estar atravesando un momento difícil.',
            'duracion' => '2h 15m',
            'anio' => '2018',
            'genero' => 'Drama',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Call Me by Your Name',
            'tituloSinEspacios' => 'CallMebyYourName',
            'sinopsis' => 'En Italia, en la década de 1980, en medio del esplendor del verano, Elio y Oliver descubren la embriagadora belleza de un deseo naciente que va a alterar sus vidas para siempre.',
            'duracion' => '2h 12m',
            'anio' => '2017',
            'genero' => 'Drama',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Shrek',
            'tituloSinEspacios' => 'Shrek',
            'sinopsis' => 'Un ogro llamado Shrek vive en su pantano, pero su preciada soledad se ve súbitamente interrumpida por la invasión de los ruidosos personajes de los cuentos de hadas. Todos fueron expulsados de sus reinos por el malvado Lord Farquaad.',
            'duracion' => '1h 35m',
            'anio' => '2001',
            'genero' => 'Animacion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Monsters, Inc.',
            'tituloSinEspacios' => 'MonstersInc',
            'sinopsis' => 'Monsters, Incorporated es la fábrica de sustos más grande en el mundo de los monstruos y James P. Sullivan es uno de sus mejores asustadores. Sullivan es un monstruo grande e intimidante de piel azul, grandes manchas color púrpura y cuernos.',
            'duracion' => '1h 32m',
            'anio' => '2001',
            'genero' => 'Animacion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Toy Story',
            'tituloSinEspacios' => 'ToyStory',
            'sinopsis' => 'Woody, el juguete favorito de Andy, se siente amenazado por la inesperada llegada de Buzz Lightyear, el guardían del espacio.',
            'duracion' => '1h 21m',
            'anio' => '1995',
            'genero' => 'Animacion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Coco',
            'tituloSinEspacios' => 'Coco',
            'sinopsis' => 'Miguel es un niño que sueña con ser músico, pero su familia se lo prohíbe porque su tatarabuelo, músico, los abandonó, y quieren obligar a Miguel a ser zapatero, como todos los miembros de la familia. Por accidente, Miguel entra en la Tierra de los Muertos, de donde sólo podrá salir si un familiar difunto le concede su bendición.',
            'duracion' => '1h 49m',
            'anio' => '2017',
            'genero' => 'Animacion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Los Increíbles 2',
            'tituloSinEspacios' => 'LosIncreíbles2',
            'sinopsis' => 'Helen es reclutada para ayudar a que la acción vuelva a la vida de los Súper, mientras Bob se enfrenta a la rutina de su vida diaria "normal" en el hogar. En casa debe lidiar con un bebé que está a punto de descubrir sus superpoderes.',
            'duracion' => '2h 5m',
            'anio' => '2018',
            'genero' => 'Animacion',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Lorena, la de pies ligeros',
            'tituloSinEspacios' => 'Lorenaladepiesligeros',
            'sinopsis' => 'Una mirada a la vida de Lorena Ramírez, quien pertenece a la comunidad rarámuri y compite en maratones.',
            'duracion' => '28min',
            'anio' => '2019',
            'genero' => 'Documental',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Surfear para vivir',
            'tituloSinEspacios' => 'Surfearparavivir',
            'sinopsis' => 'Un veterano de guerra se encuentra con otros compañeros en un programa que ayuda a soldados traumatizados a sanar sus heridas surcando las olas.',
            'duracion' => '22min',
            'anio' => '2017',
            'genero' => 'Documental',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Una revolucion en toda regla',
            'tituloSinEspacios' => 'Unarevolucionentodaregla',
            'sinopsis' => 'Las mujeres en un pueblo rural en las afueras de Nueva Delhi, India, luchan contra el estigma acerca de la menstruación cuando aprenden a fabricar toallas sanitarias.',
            'duracion' => '25min',
            'anio' => '2018',
            'genero' => 'Documental',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Expedition Happiness',
            'tituloSinEspacios' => 'ExpeditionHappiness',
            'sinopsis' => 'Un cineasta y su novia realizan un viaje épico con su perro y pasean por América del Norte en un autobús escolar.',
            'duracion' => '1h 35m',
            'anio' => '2017',
            'genero' => 'Documental',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'La partida final',
            'tituloSinEspacios' => 'Lapartidafinal',
            'sinopsis' => 'Profesionales médicos que trabajan a la vanguardia de la vida y la muerte se encuentran con pacientes terminales.',
            'duracion' => '40 min',
            'anio' => '2018',
            'genero' => 'Documental',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Police Academy',
            'tituloSinEspacios' => 'PoliceAcademy',
            'sinopsis' => 'Una nueva ley obliga a una academia de policía a abrir sus puertas a un diverso grupo de inadaptados.',
            'duracion' => '1h 37m',
            'anio' => '1989',
            'genero' => 'Comedia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Intouchables (Intocable)',
            'tituloSinEspacios' => 'Intouchables',
            'sinopsis' => 'Una extraña amistad se desarrolla entre un millonario que quedó paralítico en un accidente y un joven de los suburbios.',
            'duracion' => '1h 53m',
            'anio' => '2011',
            'genero' => 'Comedia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Las vacaciones de Mr. Bean',
            'tituloSinEspacios' => 'LasvacacionesdeMrBean',
            'sinopsis' => 'Cuando el clima húmedo de Londres se vuelve insoportable, Mr. Bean se dirige a la Costa Azul para divertirse bajo el sol.',
            'duracion' => '1h 30m',
            'anio' => '2007',
            'genero' => 'Comedia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Booksmart',
            'tituloSinEspacios' => 'Booksmart',
            'sinopsis' => 'Amy y Molly son dos excelentes estudiantes y grandes amigas que, en la víspera de la graduación de su instituto, se dan cuenta de que podrían haberse esforzado algo menos en clase y haberse divertido más.',
            'duracion' => '1h 45m',
            'anio' => '2019',
            'genero' => 'Comedia',
        ]);

        DB::table('peliculas')->insert([
            'titulo' => 'Ocho apellidos vascos',
            'tituloSinEspacios' => 'Ochoapellidosvascos',
            'sinopsis' => 'Rafa, un señorito andaluz que nunca ha salido de Sevilla, decide dejarlo todo para conquistar a Amaia, una chica vasca. Se muda al País Vasco y allí tendrá que adaptarse a un nuevo entorno y hacerse pasar por vasco para ganarse la aprobación del padre de Amaia.',
            'duracion' => '1h 38m',
            'anio' => '2014',
            'genero' => 'Comedia',
        ]);
    }
}
