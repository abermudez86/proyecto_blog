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
        Schema::create('comprobante_pagos', function (Blueprint $table) {
            $table->id('id_comprobante_pago');
            $table->unsignedBigInteger('id_comprobante');
            $table->unsignedBigInteger('id_metodo_pago');
            $table->string('codigo_tarjeta');
            $table->unsignedBigInteger('id_moneda');
            $table->decimal('cotizacion');
            $table->decimal('monto');
            $table->string('comprobante_externo');
            $table->string('comentarios');
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->index('id_comprobante');
            $table->index('id_metodo_pago');
            $table->index('comprobante_externo');
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
        Schema::dropIfExists('comprobante_pagos');
    }
};
