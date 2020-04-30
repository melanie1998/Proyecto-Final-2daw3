<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosPistaATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PrecioPistaA', function (Blueprint $table) {
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
        Schema::dropIfExists('PrecioPistaA');
    }
}
