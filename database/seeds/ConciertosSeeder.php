<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ConciertosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Concierto')->insert([
            'nombreArtista' => 'Billie Eilish',
            'fecha' => Carbon::create('2021/06/02')->toDateString(),
            'lugar' => 'Wizik Center',
            'ciudad' => 'Madrid',
            'fechaEntradas' => Carbon::create('2020/09/16')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Billie Eilish',
            'fecha' => Carbon::create('2021/06/03')->toDateString(),
            'lugar' => 'Palau Sant Jordi',
            'ciudad' => 'Barcelona',
            'fechaEntradas' => Carbon::create('2020/09/16')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Duki',
            'fecha' => Carbon::create('2021/03/15')->toDateString(),
            'lugar' => 'Estadio de la Cartuja',
            'ciudad' => 'Sevilla',
            'fechaEntradas' => Carbon::create('2020/10/08')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Harry Styles',
            'fecha' => Carbon::create('2021/02/14')->toDateString(),
            'lugar' => 'Wizik Center',
            'ciudad' => 'Madrid',
            'fechaEntradas' => Carbon::create('2020/09/01')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Harry Styles',
            'fecha' => Carbon::create('2021/02/16')->toDateString(),
            'lugar' => 'Palau Sant Jordi',
            'ciudad' => 'Barcelona',
            'fechaEntradas' => Carbon::create('2020/09/01')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Ajax y Prok',
            'fecha' => Carbon::create('2021/04/20')->toDateString(),
            'lugar' => 'Bilbao Arena',
            'ciudad' => 'Bilbao',
            'fechaEntradas' => Carbon::create('2020/09/21')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Ajax y Prok',
            'fecha' => Carbon::create('2021/04/22')->toDateString(),
            'lugar' => 'Bilbao Arena',
            'ciudad' => 'Bilbao',
            'fechaEntradas' => Carbon::create('2020/09/21')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Dua Lipa',
            'fecha' => Carbon::create('2021/07/02')->toDateString(),
            'lugar' => 'Wizik Center',
            'ciudad' => 'Madrid',
            'fechaEntradas' => Carbon::create('2020/11/12')->toDateString(),
        ]);

        
        DB::table('Concierto')->insert([
            'nombreArtista' => 'Dua Lipa',
            'fecha' => Carbon::create('2021/07/04')->toDateString(),
            'lugar' => 'Palau Sant Jordi',
            'ciudad' => 'Barcelona',
            'fechaEntradas' => Carbon::create('2020/11/12')->toDateString(),
        ]);

        DB::table('Concierto')->insert([
            'nombreArtista' => 'Anuel AA',
            'fecha' => Carbon::create('2021/05/14')->toDateString(),
            'lugar' => 'Bilbao Arena',
            'ciudad' => 'Bilbao',
            'fechaEntradas' => Carbon::create('2020/10/05')->toDateString(),
        ]);
    }
}
