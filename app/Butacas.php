<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Butacas extends Model
{
    use Notifiable;

    protected $table = "Butacas";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'numButaca', 'dia', 'hora', 'idUsuario'
    ];
}
