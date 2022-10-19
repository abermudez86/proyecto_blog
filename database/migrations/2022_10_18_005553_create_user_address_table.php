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
        Schema::create('usuarios_domicilio', function (Blueprint $table) {
            $table->id('id_direccion');
            $table->unsignedBigInteger('id_usuario');
            $table->string('principal');
            $table->unsignedBigInteger('id_pais');
            $table->unsignedBigInteger('id_estado');
            $table->string('CPA');
            $table->string('direccion');
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->index('id_pais');
            $table->index('id_estado');
            $table->foreign('usuario_creacion')->references('id')->on('users');
            $table->foreign('usuario_modificacion')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_domicilio');
    }
};
