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
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id('id_cotizacion');
            $table->int('id_moneda');
            $table->decimal('cotizacion');
            $table->datetime('fecha_cotizacion');

            $table->index(['id_moneda', 'cotizacion']);
            $table->foreign('id_moneda')->references('id_moneda')->on('monedas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizaciones');
    }
};
