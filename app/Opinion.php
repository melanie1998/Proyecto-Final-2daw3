<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Opinion extends Model
{
    use Notifiable;

    protected $table = "Opinion";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreUsuario', 'email', 'opnion', 'valoracion',
    ];

}
