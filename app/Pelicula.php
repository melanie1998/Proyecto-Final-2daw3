<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pelicula extends Model
{
    use Notifiable;

    protected $table = "Peliculas";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','titulo', 'tituloSinEspacios', 'sinopsis', 'duracion', 'anio', 'genero', 'anadidaLista'
    ];
}
