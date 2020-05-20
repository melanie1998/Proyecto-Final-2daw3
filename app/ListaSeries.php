<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ListaSeries extends Model
{
    use Notifiable;

    protected $table = "ListaSeries";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'tituloSinEspacios', 'sinopsis', 'temporadas', 'anio', 'genero', 'idUsuario'
    ];
}
