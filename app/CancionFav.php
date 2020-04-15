<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class CancionFav extends Model
{
    use Notifiable;

    protected $table = "CancionesFavs";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'artista', 'duracion', 'genero',
    ];
}
