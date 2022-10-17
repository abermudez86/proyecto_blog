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
        Schema::create('tipos_comprobante_afip', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_comprobante',4)->nullable();
            $table->string('tipo_letra',4)->nullable();
            $table->string('descripcion',250);
            $table->string('codigo_afip',3); //código del lado de AFIP
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            //$table->primary(['tipo_comprobante', 'tipo_letra']);
            $table->index(['tipo_comprobante', 'tipo_letra']);
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
        Schema::dropIfExists('tipos_comprobante_afip');
    }
};
