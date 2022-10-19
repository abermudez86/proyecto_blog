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
        Schema::create('localidades', function (Blueprint $table) {
            $table->id('id_localidad');
            $table->unsignedBigInteger('id_estado');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('telefono_extension');
            $table->string('CPA');
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->foreign('id_estado')->references('id_estado')->on('pais_estados');
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
        Schema::dropIfExists('localidades');
    }
};
