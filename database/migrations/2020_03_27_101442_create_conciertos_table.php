<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConciertosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Concierto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreArtista');
            $table->string('fecha');
            $table->string('lugar');
            $table->string('ciudad');
            $table->string('fechaEntradas');
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
        Schema::dropIfExists('Concierto');
    }
}
