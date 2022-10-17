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
        Schema::create('comprobantes_detalle', function (Blueprint $table) {
            $table->integer('id_comprobante');
            $table->integer('renglon');
            $table->string('tipo_codigo'); //'ORD'
            $table->integer('codigo');     //'id_orden_pago'
            //$table->integer('id_orden_pago');
            $table->datetime('fecha');
            $table->decimal('monto',12,4)->default(0.0);
            $table->unsignedBigInteger('id_alicuota');
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('P'); //se inicializa como pendiente
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion');

            $table->primary(['id_comprobante', 'renglon']);
            $table->index(['tipo_codigo','codigo']);
            $table->index('fecha');
            //$table->foreign(['tipo_codigo','codigo'])->references(['tipo_codigo','codigo'])->on('pagos_pendientes');
            $table->foreign('usuario_creacion')->references('id')->on('users');
            $table->foreign('usuario_modificacion')->references('id')->on('users');
            $table->foreign('id_alicuota')->references('id_alicuota')->on('alicuotas_afip');

            /*voy a cambiar la referencia al id de orden de pago por una vista.
            en el select se incluirá la referencia a la tabla que alimiento el producto /articulo / prestacion / orden de pago
            $table->datetime('fecha_pago'); //validar si la vista requerirá este campo.
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobantes_detalle');
    }

};
