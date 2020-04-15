<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Playlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('artista');
            $table->string('duracion');
            $table->string('genero');
            $table->integer('contador')->default(0);
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
        Schema::dropIfExists('Playlist');
    }
}
