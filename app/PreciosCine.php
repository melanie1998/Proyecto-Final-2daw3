<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PreciosCine extends Model
{
   
    use Notifiable;

    protected $table = "PreciosCine";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dia', 'precio',
    ];
}
