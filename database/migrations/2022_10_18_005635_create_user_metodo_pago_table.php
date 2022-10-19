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
        Schema::create('usuario_metodo_pago', function (Blueprint $table) {
            $table->id('id_usuario_metodo_pago');
            $table->string('nombre_tarjeta');
            $table->unsignedBigInteger('id_metodo_pago');
            $table->string('codigo_tarjeta');
            $table->string('nombre');
            $table->datetime('fecha_vencimiento');
            $table->string('cvv');
            $table->decimal('monto');
            $table->string('verificado');
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->index('id_metodo_pago');
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
        Schema::dropIfExists('usuario_metodo_pago');
    }
};
