<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ConciertosDisponibles extends Model
{
    use Notifiable;

    protected $table = "ConciertosDisponibles";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lugar', 'artista', 'fecha', 'hora', 'precioEntrada', 'numEntradas', 'entradasDisponibles', 'entradasCompradas',
    ];
}
