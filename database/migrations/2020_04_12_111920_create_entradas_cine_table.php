<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasCineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EntradasCine', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tituloPelicula');
            $table->string('dia');
            $table->string('hora');
            $table->string('numEntradas');
            $table->string('numButaca');
            $table->string('fila');
            $table->string('precio');
            $table->string('idUsuario');
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
        Schema::dropIfExists('EntradasCine');
    }
}
