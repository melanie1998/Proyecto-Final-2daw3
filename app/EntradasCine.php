<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EntradasCine extends Model
{
    use Notifiable;

    protected $table = "EntradasCine";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tituloPelicula', 'dia', 'hora', 'numEntradas', 'numButaca', 'fila', 'precio', 'idUsuario', 'idEntrada'
    ];
}
