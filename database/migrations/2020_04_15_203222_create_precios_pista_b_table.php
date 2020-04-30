<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosPistaBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PrecioPistaB', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lugar');
            $table->string('artista');
            $table->integer('entradasDisponibles');
            $table->integer('entradasCompradas');
            $table->integer('precio');
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
        Schema::dropIfExists('PrecioPistaB');
    }
}
