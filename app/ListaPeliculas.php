<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ListaPeliculas extends Model
{
    use Notifiable;

    protected $table = "ListaPeliculas";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'titulo', 'tituloSinEspacios', 'sinopsis', 'duracion', 'anio', 'genero', 'idUsuario'
    ];
}
