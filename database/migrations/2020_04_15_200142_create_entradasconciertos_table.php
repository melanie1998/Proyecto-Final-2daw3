<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasconciertosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EntradasConciertos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idUsuario');
            $table->string('artista');
            $table->string('fecha');
            $table->string('hora');
            $table->string('lugar');
            $table->string('gradaPista');
            $table->integer('cantEntradas');
            $table->string('precio');
            $table->integer('idEntrada')->default();
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
        Schema::dropIfExists('EntradasConciertos');
    }
}
