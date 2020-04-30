<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EntradasConciertos extends Model
{
    use Notifiable;

    protected $table = "EntradasConciertos";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUsuario', 'artista', 'fecha', 'hora', 'lugar', 'gradaPista', 'cantEntradas', 'precio',
    ];
}
