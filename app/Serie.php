<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Serie extends Model
{
    use Notifiable;

    protected $table = "series";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'tituloSinEspacios', 'sinopsis', 'temporadas', 'anio', 'genero', 'anadidaLista',
    ];
}
