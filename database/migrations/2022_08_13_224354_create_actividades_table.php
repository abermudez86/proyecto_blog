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
        Schema::create('actividades', function (Blueprint $table) {
            $table->integer('id_actividad');
            $table->string('descripcion');
            $table->datetime('fecha_inicio');
            $table->integer('periodo_pago'); //en dias (cada semana, cada mes)
            $table->integer('total_pagos');  //cantidad de pagos totales
            $table->decimal('monto',12,4)->default(0.0);
            $table->datetime('fecha_creacion');
            $table->unsignedBigInteger('usuario_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->primary('id_actividad');
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
        Schema::dropIfExists('actividades');
    }
};
