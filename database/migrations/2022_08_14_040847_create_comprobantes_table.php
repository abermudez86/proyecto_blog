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
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id('id_comprobante');
            $table->unsignedBigInteger('id_tipo_comprobante');
            $table->unsignedBigInteger('id_participante');
            $table->decimal('monto_total',12,4)->default(0.0);
            $table->decimal('iva',12,4)->default(0);
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('observaciones');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->index('id_tipo_comprobante');
            $table->foreign('id_participante')->references('id')->on('users');
            $table->foreign('usuario_creacion')->references('id')->on('users');
            $table->foreign('usuario_modificacion')->references('id')->on('users');
            $table->foreign('id_tipo_comprobante')->references('id_tipo_comprobante')->on('tipos_comprobante_afip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobantes');
    }
};
