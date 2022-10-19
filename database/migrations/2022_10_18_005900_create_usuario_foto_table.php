<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_foto', function (Blueprint $table) {
            $table->id('id_usuario_foto');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_foto');


            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_foto')->references('id_foto')->on('fotos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_foto');
    }
};
