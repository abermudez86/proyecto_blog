<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
use Staudenmeir\LaravelMigrationViews\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_datos', function (Blueprint $table) {
            $table->integer('id_user');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('id_tipo_documento');
            $table->string('numero_documento');
            $table->string('email');
            $table->string('telefono');
            $table->string('genero');
            $table->string('estado')->default('A');
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->primary('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_tipo_documento')->references('id_tipo_documento')->on('tipo_documento');
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
