<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class PrecioPistaB extends Model
{
    use Notifiable;

    protected $table = "PrecioPistaB";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lugar', 'artista',  'entradasDisponibles', 'entradasCompradas', 'precio',
    ];
}
