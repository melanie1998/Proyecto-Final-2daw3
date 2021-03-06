<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ConciertosSeeder::class);
        $this->call(Artistas::class);
        $this->call(Canciones::class);
        $this->call(ConciertosDisponibles::class);
        $this->call(PrecioGradas::class);
        $this->call(PrecioPistaA::class);
        $this->call(PrecioPistaB::class);
        $this->call(Peliculas::class);
        $this->call(Series::class);
    }
}
