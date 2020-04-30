<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConciertosDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConciertosDisponibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lugar');
            $table->string('artista');
            $table->string('fecha');
            $table->string('hora');
            $table->integer('numEntradas');
            $table->integer('entradasDisponibles');
            $table->integer('entradasCompradas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ConciertosDisponibles');
    }
}
