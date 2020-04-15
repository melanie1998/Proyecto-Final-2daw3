<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario');
            $table->string('nombreApellido');
            $table->string('email')->unique();
            $table->string('email_token')->nullable();
            $table->string('telefono');
            $table->string('direccion');
            $table->string('password')->nullable();
            $table->string('fotoPerfil')->default('iconopersona.png');
            $table->string('google_id')->nullable();
            $table->integer('contadorSesion')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
