<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Opinion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreUsuario');
            $table->string('email');
            $table->string('opinion')->nullable();
            $table->integer('valoracion');
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
        Schema::dropIfExists('Opinion');
    }
}
