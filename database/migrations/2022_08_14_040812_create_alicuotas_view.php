<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
use Staudenmeir\LaravelMigrationViews\Facades\Schema;

class CreateAlicuotasView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //\DB::statement($this->createView());
        $query = DB::table('alicuotas_afip')
                    ->select(['id_alicuota',
                            'descripcion',
                            'codigo_afip',
                            'estado'])
                    ->where('estado', 'A');

                   //dd($query);
        Schema::createView('alicuotas', $query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //\DB::statement($this->dropView());
        Schema::dropViewIfExists('alicuotas');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL
CREATE VIEW 'alicuotas' AS
SELECT
    alicuotas_afip.id_alicuota,
    alicuotas_afip.descripcion,
    alicuotas_afip.codigo_afip,
    alicuotas_afip.estado
FROM alicuotas_afip
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
DROP VIEW IF EXISTS 'alicuotas_afip';
SQL;

    }

};
