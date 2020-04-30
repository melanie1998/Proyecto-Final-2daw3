<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class PrecioPistaA extends Model
{
    use Notifiable;

    protected $table = "PrecioPistaA";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lugar', 'artista',  'entradasDisponibles', 'entradasCompradas', 'precio',
    ];
}
