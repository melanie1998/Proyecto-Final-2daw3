<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Concierto extends Model
{
    use Notifiable;

    protected $table = "Concierto";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreArtista', 'fecha', 'lugar', 'fechaVentaEntradas',
    ];
}
