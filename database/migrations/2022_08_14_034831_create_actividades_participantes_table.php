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
        Schema::create('actividades_participantes', function (Blueprint $table) {
            $table->integer('id_actividad');
            $table->integer('renglon');
            $table->unsignedBigInteger('id_participante');
            $table->string('observaciones');
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->primary(['id_actividad', 'renglon']);
            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');
            $table->foreign('id_participante')->references('id')->on('users');
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
        Schema::dropIfExists('actividades_participantes');
    }
};
