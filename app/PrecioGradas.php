<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class PrecioGradas extends Model
{
    use Notifiable;

    protected $table = "PrecioGradas";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numeroGrada', 'lugar', 'artista', 'entradasDisponibles', 'entradasCompradas', 'precio',
    ];
}
