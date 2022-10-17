<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
use Staudenmeir\LaravelMigrationViews\Facades\Schema;

class CreateOrdenesPagoView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //\DB::statement($this->createView());
        $query = DB::table('ordenes_pago')
                    ->select(['id_orden_pago as codigo',
                            'id_participante',
                            'id_actividad',
                            'nro_pago',
                            'fecha_pago as fecha_vencimiento',
                            'monto',
                            'observaciones'])
                    ->where('estado', 'A');

                   //dd($query);
        Schema::createView('pagos_pendientes', $query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //\DB::statement($this->dropView());
        Schema::dropViewIfExists('pagos_pendientes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        //where ordenes_pago.estado = 'A'
        return <<<SQL
CREATE VIEW 'pagos_pendientes' AS
SELECT 'ORD' as tipo_codigo,
ordenes_pago.id_orden_pago as codigo,
ordenes_pago.id_participante ,
ordenes_pago.id_actividad ,
ordenes_pago.nro_pago,
ordenes_pago.fecha_pago as fecha_vencimiento,
ordenes_pago.monto,
ordenes_pago.observaciones
FROM ordenes_pago
SQL;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     private function dropView(): string
    {
        return <<<SQL
DROP VIEW IF EXISTS 'pagos_pendientes';
SQL;

    }

};
