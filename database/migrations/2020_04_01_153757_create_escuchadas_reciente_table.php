<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuchadasRecienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EscuchadasReciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('artista');
            $table->string('duracion');
            $table->string('genero');
            $table->string('idUsuario');
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
        Schema::dropIfExists('EscuchadasReciente');
    }
}
