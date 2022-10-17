<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Alicuota\AlicuotaAfip;

class AlicuotasAfipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $table0 = new AlicuotaAfip;
        //$table0->id_AlicuotaAfip = 0;
        $table0->descripcion = 'IVA 0.00';
        $table0->codigo_afip = 0003;
        $table0->usuario_creacion = 11;
        $table0->usuario_modificacion = 11;
        $table0->save();

        $table1 = new AlicuotaAfip;
        //$table1->id_AlicuotaAfip = 1;
        $table1->descripcion = 'IVA 10.5';
        $table1->codigo_afip = 0004;
        $table1->usuario_creacion = 11;
        $table1->usuario_modificacion = 11;
        $table1->save();

        $table2 = new AlicuotaAfip;
        //$table2->id_AlicuotaAfip = 2;
        $table2->descripcion = 'IVA 21.0';
        $table2->codigo_afip = 0005;
        $table2->usuario_creacion = 11;
        $table2->usuario_modificacion = 11;
        $table2->save();

        $table3 = new AlicuotaAfip;
        //$table3->id_AlicuotaAfip = 3;
        $table3->descripcion = 'IVA 27.0';
        $table3->codigo_afip = 0006;
        $table3->usuario_creacion = 11;
        $table3->usuario_modificacion = 11;
        $table3->estado = 'B';
        $table3->save();

        $table4 = new AlicuotaAfip;
        //$table4->id_AlicuotaAfip = 4;
        $table4->descripcion = 'IVA 5.00';
        $table4->codigo_afip = 8;
        $table4->usuario_creacion = 11;
        $table4->usuario_modificacion = 11;
        $table4->estado = 'B';
        $table4->save();

        $table5 = new AlicuotaAfip;
        //$table5->id_AlicuotaAfip = 5;
        $table5->descripcion = 'IVA 2.50';
        $table5->codigo_afip = 9;
        $table5->usuario_creacion = 11;
        $table5->usuario_modificacion = 11;
        $table5->estado = 'B';
        $table5->save();
    }
}
