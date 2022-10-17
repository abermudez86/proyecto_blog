<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\ComprobanteAfip\TipoComprobanteAfip;

class TiposComprobanteAfipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $table->id();
            $table->string('descripcion',250);
            $table->string('codigo_afip',3); //nombre que se usará en la aplicacion
            $table->unsignedBigInteger('usuario_creacion');
            $table->datetime('fecha_creacion');
            $table->string('estado')->default('P'); //se inicializa como pendiente
            $table->datetime('fecha_modificacion');
            $table->unsignedBigInteger('usuario_modificacion'); */

            $table0 = new TipoComprobanteAfip;
            $table0->descripcion = 'FACTURAS A';
            $table0->codigo_afip = '001';
            $table0->tipo_comprobante = 'FC';
            $table0->tipo_letra = 'A';
            $table0->usuario_creacion = 1;
            $table0->usuario_modificacion = 1;
            $table0->save();

            $table1 = new TipoComprobanteAfip;
            $table1->descripcion = 'NOTAS DE DEBITO A';
            $table1->codigo_afip = '002';
            $table1->tipo_comprobante = 'ND';
            $table1->tipo_letra = 'A';
            $table1->usuario_creacion = 1;
            $table1->usuario_modificacion = 1;
            $table1->save();

            $table2 = new TipoComprobanteAfip;
            $table2->descripcion = 'NOTAS DE CREDITO A';
            $table2->codigo_afip = '003';
            $table2->tipo_comprobante = 'NC';
            $table2->tipo_letra = 'A';
            $table2->usuario_creacion = 1;
            $table2->usuario_modificacion = 1;
            $table2->save();

            $table3 = new TipoComprobanteAfip;
            $table3->descripcion = 'RECIBOS A';
            $table3->codigo_afip = '004';
            $table3->tipo_comprobante = 'RC';
            $table3->tipo_letra = 'A';
            $table3->usuario_creacion = 1;
            $table3->usuario_modificacion = 1;
            $table3->save();

            $table4 = new TipoComprobanteAfip;
            $table4->descripcion = 'NOTAS DE VENTA AL CONTADO A';
            $table4->codigo_afip = '005';
            $table4->tipo_comprobante = 'NV';
            $table4->tipo_letra = 'A';
            $table4->estado = 'B';
            $table4->usuario_creacion = 1;
            $table4->usuario_modificacion = 1;
            $table4->save();

            $table5 = new TipoComprobanteAfip;
            $table5->descripcion = 'FACTURAS B';
            $table5->codigo_afip = '006';
            $table5->tipo_comprobante = 'FC';
            $table5->tipo_letra = 'B';
            $table5->usuario_creacion = 1;
            $table5->usuario_modificacion = 1;
            $table5->save();

            $table6 = new TipoComprobanteAfip;
            $table6->descripcion = 'NOTAS DE DEBITO B';
            $table6->codigo_afip = '007';
            $table6->tipo_comprobante = 'ND';
            $table6->tipo_letra = 'B';
            $table6->usuario_creacion = 1;
            $table6->usuario_modificacion = 1;
            $table6->save();

            $table7 = new TipoComprobanteAfip;
            $table7->descripcion = 'NOTAS DE CREDITO B';
            $table7->codigo_afip = '008';
            $table7->tipo_comprobante = 'NC';
            $table7->tipo_letra = 'B';
            $table7->usuario_creacion = 1;
            $table7->usuario_modificacion = 1;
            $table7->save();

            $table8 = new TipoComprobanteAfip;
            $table8->descripcion = 'RECIBOS B';
            $table8->codigo_afip = '009';
            $table8->tipo_comprobante = 'RC';
            $table8->tipo_letra = 'B';
            $table8->usuario_creacion = 1;
            $table8->usuario_modificacion = 1;
            $table8->save();

            $table9 = new TipoComprobanteAfip;
            $table9->descripcion = 'NOTAS DE VENTA AL CONTADO B';
            $table9->codigo_afip = '010';
            $table9->tipo_comprobante = 'NV';
            $table9->tipo_letra = 'B';
            $table9->estado = 'B';
            $table9->usuario_creacion = 1;
            $table9->usuario_modificacion = 1;
            $table9->save();

            $table10 = new TipoComprobanteAfip;
            $table10->descripcion = 'FACTURAS C';
            $table10->codigo_afip = '011';
            $table10->tipo_comprobante = 'FC';
            $table10->tipo_letra = 'C';
            $table10->usuario_creacion = 1;
            $table10->usuario_modificacion = 1;
            $table10->save();

            $table11 = new TipoComprobanteAfip;
            $table11->descripcion = 'NOTAS DE DEBITO C';
            $table11->codigo_afip = '012';
            $table11->tipo_comprobante = 'ND';
            $table11->tipo_letra = 'C';
            $table11->usuario_creacion = 1;
            $table11->usuario_modificacion = 1;
            $table11->save();

            $table12 = new TipoComprobanteAfip;
            $table12->descripcion = 'NOTAS DE CREDITO C';
            $table12->codigo_afip = '013';
            $table12->tipo_comprobante = 'NC';
            $table12->tipo_letra = 'C';
            $table12->usuario_creacion = 1;
            $table12->usuario_modificacion = 1;
            $table12->save();

            $table13 = new TipoComprobanteAfip;
            $table13->descripcion = 'RECIBOS C';
            $table13->codigo_afip = '015';
            $table13->tipo_comprobante = 'RC';
            $table13->tipo_letra = 'C';
            $table13->usuario_creacion = 1;
            $table13->usuario_modificacion = 1;
            $table13->save();

            $table14 = new TipoComprobanteAfip;
            $table14->descripcion = 'NOTAS DE VENTA AL CONTADO C';
            $table14->codigo_afip = '016';
            $table14->tipo_comprobante = 'NV';
            $table14->tipo_letra = 'C';
            $table14->estado = 'B';
            $table14->usuario_creacion = 1;
            $table14->usuario_modificacion = 1;
            $table14->save();

            $table15 = new TipoComprobanteAfip;
            $table15->descripcion = 'LIQUIDACION DE SERVICIOS PUBLICOS CLASE A';
            $table15->codigo_afip = '017';
            $table15->tipo_comprobante = 'LS';
            $table15->tipo_letra = 'A';
            $table15->estado = 'B';
            $table15->usuario_creacion = 1;
            $table15->usuario_modificacion = 1;
            $table15->save();

            $table16 = new TipoComprobanteAfip;
            $table16->descripcion = 'LIQUIDACION DE SERVICIOS PUBLICOS CLASE B';
            $table16->codigo_afip = '018';
            $table16->tipo_comprobante = 'LS';
            $table16->tipo_letra = 'B';
            $table16->estado = 'B';
            $table16->usuario_creacion = 1;
            $table16->usuario_modificacion = 1;
            $table16->save();

            $table17 = new TipoComprobanteAfip;
            $table17->descripcion = 'FACTURAS DE EXPORTACION';
            $table17->codigo_afip = '019';
            $table17->tipo_comprobante = 'FC'; //'FEx';
            $table17->tipo_letra = 'X';
            $table17->estado = 'B';
            $table17->usuario_creacion = 1;
            $table17->usuario_modificacion = 1;
            $table17->save();

            $table18 = new TipoComprobanteAfip;
            $table18->descripcion = 'NOTAS DE DEBITO POR OPERACIONES CON EL EXTERIOR';
            $table18->codigo_afip = '020';
            $table18->tipo_comprobante = 'ND'; //'NDEx';
            $table18->tipo_letra = 'X';
            $table18->estado = 'B';
            $table18->usuario_creacion = 1;
            $table18->usuario_modificacion = 1;
            $table18->save();

            $table19 = new TipoComprobanteAfip;
            $table19->descripcion = 'NOTAS DE CREDITO POR OPERACIONES CON EL EXTERIOR';
            $table19->codigo_afip = '021';
            $table19->tipo_comprobante = 'NC'; //'NCEx';
            $table19->tipo_letra = 'X';
            $table19->estado = 'B';
            $table19->usuario_creacion = 1;
            $table19->usuario_modificacion = 1;
            $table19->save();

            $table20 = new TipoComprobanteAfip;
            $table20->descripcion = 'FACTURAS - PERMISO EXPORTACION SIMPLIFICADO - DTO. 855/97';
            $table20->codigo_afip = '022';
            $table20->tipo_comprobante = 'FC'; //'FEx';
            $table20->tipo_letra = 'X';
            $table20->estado = 'B';
            $table20->usuario_creacion = 1;
            $table20->usuario_modificacion = 1;
            $table20->save();

            $table21 = new TipoComprobanteAfip;
            $table21->descripcion = 'COMPROBANTES "A" DE COMPRA PRIMARIA PARA EL SECTOR PESQUERO MARITIMO';
            $table21->codigo_afip = '023';
            $table21->tipo_comprobante = 'FC';
            $table21->tipo_letra = 'A';
            $table21->estado = 'B';
            $table21->usuario_creacion = 1;
            $table21->usuario_modificacion = 1;
            $table21->save();

            $table22 = new TipoComprobanteAfip;
            $table22->descripcion = 'COMPROBANTES "A" DE CONSIGNACION PRIMARIA PARA EL SECTOR PESQUERO MARITIMO';
            $table22->codigo_afip = '024';
            $table22->tipo_comprobante = 'FC'; //'FCg'
            $table22->tipo_letra = 'A';
            $table22->estado = 'B';
            $table22->usuario_creacion = 1;
            $table22->usuario_modificacion = 1;
            $table22->save();

            $table23 = new TipoComprobanteAfip;
            $table23->descripcion = 'COMPROBANTES "B" DE COMPRA PRIMARIA PARA EL SECTOR PESQUERO MARITIMO';
            $table23->codigo_afip = '025';
            $table23->tipo_comprobante = 'FC';
            $table23->tipo_letra = 'B';
            $table23->estado = 'B';
            $table23->usuario_creacion = 1;
            $table23->usuario_modificacion = 1;
            $table23->save();

            $table24 = new TipoComprobanteAfip;
            $table24->descripcion = 'COMPROBANTES "B" DE CONSIGNACION PRIMARIA PARA EL SECTOR PESQUERO MARITIMO';
            $table24->codigo_afip = '026';
            $table24->tipo_comprobante = 'FC'; //'FCg'
            $table24->tipo_letra = 'B';
            $table24->estado = 'B';
            $table24->usuario_creacion = 1;
            $table24->usuario_modificacion = 1;
            $table24->save();

            $table25 = new TipoComprobanteAfip;
            $table25->descripcion = 'LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE A';
            $table25->codigo_afip = '027';
            $table25->tipo_comprobante = 'LUC';
            $table25->tipo_letra = 'A';
            $table25->estado = 'B';
            $table25->usuario_creacion = 1;
            $table25->usuario_modificacion = 1;
            $table25->save();

            $table26 = new TipoComprobanteAfip;
            $table26->descripcion = 'LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE B';
            $table26->codigo_afip = '028';
            $table26->tipo_comprobante = 'LUC';
            $table26->tipo_letra = 'B';
            $table26->estado = 'B';
            $table26->usuario_creacion = 1;
            $table26->usuario_modificacion = 1;
            $table26->save();

            $table27 = new TipoComprobanteAfip;
            $table27->descripcion = 'LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE C';
            $table27->codigo_afip = '029';
            $table27->tipo_comprobante = 'LUC';
            $table27->tipo_letra = 'C';
            $table27->estado = 'B';
            $table27->usuario_creacion = 1;
            $table27->usuario_modificacion = 1;
            $table27->save();

            $table28 = new TipoComprobanteAfip;
            $table28->descripcion = 'COMPROBANTES DE COMPRA DE BIENES USADOS';
            $table28->codigo_afip = '030';
            $table28->tipo_comprobante = 'FC'; //'CBU'
            $table28->tipo_letra = 'X';
            $table28->estado = 'B';
            $table28->usuario_creacion = 1;
            $table28->usuario_modificacion = 1;
            $table28->save();

            $table29 = new TipoComprobanteAfip;
            $table29->descripcion = 'COMPROBANTES PARA RECICLAR MATERIALES';
            $table29->codigo_afip = '032';
            $table29->tipo_comprobante = 'FC'; //'CBU'
            $table29->tipo_letra = 'X';
            $table29->estado = 'B';
            $table29->usuario_creacion = 1;
            $table29->usuario_modificacion = 1;
            $table29->save();

            $table30 = new TipoComprobanteAfip;
            $table30->descripcion = 'LIQUIDACION PRIMARIA DE GRANOS';
            $table30->codigo_afip = '033';
            $table30->tipo_comprobante = 'FC'; //'LPG'
            $table30->tipo_letra = 'X';
            $table30->estado = 'B';
            $table30->usuario_creacion = 1;
            $table30->usuario_modificacion = 1;
            $table30->save();

            $table31 = new TipoComprobanteAfip;
            $table31->descripcion = 'COMPROBANTES "A" DEL APARTADO A INCISO F R G N 1415';
            $table31->codigo_afip = '034';
            $table31->tipo_comprobante = 'FC'; //'C'
            $table31->tipo_letra = 'A';
            $table31->estado = 'B';
            $table31->usuario_creacion = 1;
            $table31->usuario_modificacion = 1;
            $table31->save();

            $table32 = new TipoComprobanteAfip;
            $table32->descripcion = 'COMPROBANTES B DEL ANEXO I, APARTADO A, INC. F), RG N° 1415';
            $table32->codigo_afip = '035';
            $table32->tipo_comprobante = 'FC'; //'C'
            $table32->tipo_letra = 'B';
            $table32->estado = 'B';
            $table32->usuario_creacion = 1;
            $table32->usuario_modificacion = 1;
            $table32->save();

            $table33 = new TipoComprobanteAfip;
            $table33->descripcion = 'COMPROBANTES C DEL ANEXO I, APARTADO A, INC.F), R.G. N° 1415';
            $table33->codigo_afip = '036';
            $table33->tipo_comprobante = 'FC'; //'C'
            $table33->tipo_letra = 'C';
            $table33->estado = 'B';
            $table33->usuario_creacion = 1;
            $table33->usuario_modificacion = 1;
            $table33->save();

            $table34 = new TipoComprobanteAfip;
            $table34->descripcion = 'NOTAS DE DEBITO O DOCUMENTO EQUIVALENTE QUE CUMPLAN CON LA R.G. N° 1415';
            $table34->codigo_afip = '037';
            $table34->tipo_comprobante = 'ND';
            $table34->tipo_letra = 'X';
            $table34->estado = 'B';
            $table34->usuario_creacion = 1;
            $table34->usuario_modificacion = 1;
            $table34->save();

            $table35 = new TipoComprobanteAfip;
            $table35->descripcion = 'NOTAS DE CREDITO O DOCUMENTO EQUIVALENTE QUE CUMPLAN CON LA R.G. N° 1415';
            $table35->codigo_afip = '038';
            $table35->tipo_comprobante = 'NC';
            $table35->tipo_letra = 'X';
            $table35->estado = 'B';
            $table35->usuario_creacion = 1;
            $table35->usuario_modificacion = 1;
            $table35->save();

            $table36 = new TipoComprobanteAfip;
            $table36->descripcion = 'OTROS COMPROBANTES A QUE CUMPLEN CON LA R G 1415';
            $table36->codigo_afip = '039';
            $table36->tipo_comprobante = 'FC'; //'C'
            $table36->tipo_letra = 'A';
            $table36->estado = 'B';
            $table36->usuario_creacion = 1;
            $table36->usuario_modificacion = 1;
            $table36->save();

            $table37 = new TipoComprobanteAfip;
            $table37->descripcion = 'OTROS COMPROBANTES B QUE CUMPLAN CON LA R.G. 1415';
            $table37->codigo_afip = '040';
            $table37->tipo_comprobante = 'FC'; //'C'
            $table37->tipo_letra = 'B';
            $table37->estado = 'B';
            $table37->usuario_creacion = 1;
            $table37->usuario_modificacion = 1;
            $table37->save();

            $table38 = new TipoComprobanteAfip;
            $table38->descripcion = 'OTROS COMPROBANTES C QUE CUMPLAN CON LA R.G. 1415';
            $table38->codigo_afip = '041';
            $table38->tipo_comprobante = 'FC'; //'C'
            $table38->tipo_letra = 'C';
            $table38->estado = 'B';
            $table38->usuario_creacion = 1;
            $table38->usuario_modificacion = 1;
            $table38->save();

            $table39 = new TipoComprobanteAfip;
            $table39->descripcion = 'NOTA DE CREDITO LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE B';
            $table39->codigo_afip = '043';
            $table39->tipo_comprobante = 'NC';
            $table39->tipo_letra = 'B';
            $table39->estado = 'B';
            $table39->usuario_creacion = 1;
            $table39->usuario_modificacion = 1;
            $table39->save();

            $table40 = new TipoComprobanteAfip;
            $table40->descripcion = 'NOTA DE CREDITO LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE C';
            $table40->codigo_afip = '044';
            $table40->tipo_comprobante = 'NC';
            $table40->tipo_letra = 'C';
            $table40->estado = 'B';
            $table40->usuario_creacion = 1;
            $table40->usuario_modificacion = 1;
            $table40->save();

            $table41 = new TipoComprobanteAfip;
            $table41->descripcion = 'NOTA DE DEBITO LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE A';
            $table41->codigo_afip = '045';
            $table41->tipo_comprobante = 'ND';
            $table41->tipo_letra = 'A';
            $table41->estado = 'B';
            $table41->usuario_creacion = 1;
            $table41->usuario_modificacion = 1;
            $table41->save();

            $table42 = new TipoComprobanteAfip;
            $table42->descripcion = 'NOTA DE DEBITO LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE B';
            $table42->codigo_afip = '046';
            $table42->tipo_comprobante = 'ND';
            $table42->tipo_letra = 'B';
            $table42->estado = 'B';
            $table42->usuario_creacion = 1;
            $table42->usuario_modificacion = 1;
            $table42->save();

            $table43 = new TipoComprobanteAfip;
            $table43->descripcion = 'NOTA DE DEBITO LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE C';
            $table43->codigo_afip = '047';
            $table43->tipo_comprobante = 'ND';
            $table43->tipo_letra = 'C';
            $table43->estado = 'B';
            $table43->usuario_creacion = 1;
            $table43->usuario_modificacion = 1;
            $table43->save();

            $table44 = new TipoComprobanteAfip;
            $table44->descripcion = 'NOTA DE CREDITO LIQUIDACION UNICA COMERCIAL IMPOSITIVA CLASE A';
            $table44->codigo_afip = '048';
            $table44->tipo_comprobante = 'NC';
            $table44->tipo_letra = 'A';
            $table44->estado = 'B';
            $table44->usuario_creacion = 1;
            $table44->usuario_modificacion = 1;
            $table44->save();

            $table45 = new TipoComprobanteAfip;
            $table45->descripcion = 'COMPROBANTES DE COMPRA DE BIENES NO REGISTRABLES A CONSUMIDORES FINALES';
            $table45->codigo_afip = '049';
            $table45->tipo_comprobante = 'VE'; //'CCB'
            $table45->tipo_letra = 'X';
            $table45->estado = 'B';
            $table45->usuario_creacion = 1;
            $table45->usuario_modificacion = 1;
            $table45->save();

            $table46 = new TipoComprobanteAfip;
            $table46->descripcion = 'RECIBO FACTURA A REGIMEN DE FACTURA DE CREDITO';
            $table46->codigo_afip = '050';
            $table46->tipo_comprobante = 'RC'; //'RFC'
            $table46->tipo_letra = 'A';
            $table46->estado = 'B';
            $table46->usuario_creacion = 1;
            $table46->usuario_modificacion = 1;
            $table46->save();

            $table47 = new TipoComprobanteAfip;
            $table47->descripcion = 'FACTURAS M';
            $table47->codigo_afip = '051';
            $table47->tipo_comprobante = 'FC';
            $table47->tipo_letra = 'M';
            $table47->estado = 'B';
            $table47->usuario_creacion = 1;
            $table47->usuario_modificacion = 1;
            $table47->save();

            $table48 = new TipoComprobanteAfip;
            $table48->descripcion = 'NOTAS DE DEBITO M';
            $table48->codigo_afip = '052';
            $table48->tipo_comprobante = 'ND';
            $table48->tipo_letra = 'M';
            $table48->estado = 'B';
            $table48->usuario_creacion = 1;
            $table48->usuario_modificacion = 1;
            $table48->save();

            $table49 = new TipoComprobanteAfip;
            $table49->descripcion = 'NOTAS DE CREDITO M';
            $table49->codigo_afip = '053';
            $table49->tipo_comprobante = 'NC';
            $table49->tipo_letra = 'M';
            $table49->estado = 'B';
            $table49->usuario_creacion = 1;
            $table49->usuario_modificacion = 1;
            $table49->save();

            $table50 = new TipoComprobanteAfip;
            $table50->descripcion = 'RECIBOS M';
            $table50->codigo_afip = '054';
            $table50->tipo_comprobante = 'RC';
            $table50->tipo_letra = 'M';
            $table50->estado = 'B';
            $table50->usuario_creacion = 1;
            $table50->usuario_modificacion = 1;
            $table50->save();

            $table51 = new TipoComprobanteAfip;
            $table51->descripcion = 'NOTAS DE VENTA AL CONTADO A';
            $table51->codigo_afip = '055';
            $table51->tipo_comprobante = 'NV';
            $table51->tipo_letra = 'M';
            $table51->estado = 'B';
            $table51->usuario_creacion = 1;
            $table51->usuario_modificacion = 1;
            $table51->save();

            $table52 = new TipoComprobanteAfip;
            $table52->descripcion = 'COMPROBANTES M DEL ANEXO I APARTADO A INC F R G N 1415';
            $table52->codigo_afip = '056';
            $table52->tipo_comprobante = 'FC'; //'C'
            $table52->tipo_letra = 'M';
            $table52->estado = 'B';
            $table52->usuario_creacion = 1;
            $table52->usuario_modificacion = 1;
            $table52->save();

            $table53 = new TipoComprobanteAfip;
            $table53->descripcion = 'OTROS COMPROBANTES M QUE CUMPLAN CON LA R G N 1415';
            $table53->codigo_afip = '057';
            $table53->tipo_comprobante = 'FC'; //'OC'
            $table53->tipo_letra = 'M';
            $table53->estado = 'B';
            $table53->usuario_creacion = 1;
            $table53->usuario_modificacion = 1;
            $table53->save();

            $table54 = new TipoComprobanteAfip;
            $table54->descripcion = 'CUENTAS DE VENTA Y LIQUIDO PRODUCTO M COD DENOMINACIÓN';
            $table54->codigo_afip = '058';
            $table54->tipo_comprobante = 'FC'; //'CV'
            $table54->tipo_letra = 'M';
            $table54->estado = 'B';
            $table54->usuario_creacion = 1;
            $table54->usuario_modificacion = 1;
            $table54->save();

            $table55 = new TipoComprobanteAfip;
            $table55->descripcion = 'LIQUIDACIONES M';
            $table55->codigo_afip = '059';
            $table55->tipo_comprobante = 'LC'; //'L'
            $table55->tipo_letra = 'M';
            $table55->estado = 'B';
            $table55->usuario_creacion = 1;
            $table55->usuario_modificacion = 1;
            $table55->save();

            $table56 = new TipoComprobanteAfip;
            $table56->descripcion = 'CUENTAS DE VENTA Y LIQUIDO PRODUCTO A';
            $table56->codigo_afip = '060';
            $table56->tipo_comprobante = 'CV'; //'C'
            $table56->tipo_letra = 'A';
            $table56->estado = 'B';
            $table56->usuario_creacion = 1;
            $table56->usuario_modificacion = 1;
            $table56->save();

            $table57 = new TipoComprobanteAfip;
            $table57->descripcion = 'CUENTAS DE VENTA Y LIQUIDO PRODUCTO B';
            $table57->codigo_afip = '061';
            $table57->tipo_comprobante = 'CV'; //'C'
            $table57->tipo_letra = 'B';
            $table57->estado = 'B';
            $table57->usuario_creacion = 1;
            $table57->usuario_modificacion = 1;
            $table57->save();

            $table58 = new TipoComprobanteAfip;
            $table58->descripcion = 'LIQUIDACIONES A';
            $table58->codigo_afip = '063';
            $table58->tipo_comprobante = 'LC'; //'L'
            $table58->tipo_letra = 'A';
            $table58->estado = 'B';
            $table58->usuario_creacion = 1;
            $table58->usuario_modificacion = 1;
            $table58->save();

            $table59 = new TipoComprobanteAfip;
            $table59->descripcion = 'LIQUIDACIONES B';
            $table59->codigo_afip = '064';
            $table59->tipo_comprobante = 'LC'; //'L'
            $table59->tipo_letra = 'B';
            $table59->estado = 'B';
            $table59->usuario_creacion = 1;
            $table59->usuario_modificacion = 1;
            $table59->save();

            $table60 = new TipoComprobanteAfip;
            $table60->descripcion = 'DESPACHO DE IMPORTACION';
            $table60->codigo_afip = '066';
            $table60->tipo_comprobante = 'RC'; //'DI'
            $table60->tipo_letra = 'X';
            $table60->estado = 'B';
            $table60->usuario_creacion = 1;
            $table60->usuario_modificacion = 1;
            $table60->save();

            $table61 = new TipoComprobanteAfip;
            $table61->descripcion = 'LIQUIDACION C';
            $table61->codigo_afip = '068';
            $table61->tipo_comprobante = 'LC'; //'C'
            $table61->tipo_letra = 'C';
            $table61->estado = 'B';
            $table61->usuario_creacion = 1;
            $table61->usuario_modificacion = 1;
            $table61->save();

            $table62 = new TipoComprobanteAfip;
            $table62->descripcion = 'RECIBOS FACTURA DE CREDITO';
            $table62->codigo_afip = '070';
            $table62->tipo_comprobante = 'RC'; //'RFC'
            $table62->tipo_letra = 'X';
            $table62->estado = 'B';
            $table62->usuario_creacion = 1;
            $table62->usuario_modificacion = 1;
            $table62->save();

            $table63 = new TipoComprobanteAfip;
            $table63->descripcion = 'TIQUE FACTURA A CONTROLADORES FISCALES';
            $table63->codigo_afip = '081';
            $table63->tipo_comprobante = 'TK'; //'TF'
            $table63->tipo_letra = 'A';
            $table63->estado = 'B';
            $table63->usuario_creacion = 1;
            $table63->usuario_modificacion = 1;
            $table63->save();

            $table64 = new TipoComprobanteAfip;
            $table64->descripcion = 'TIQUE - FACTURA B';
            $table64->codigo_afip = '082';
            $table64->tipo_comprobante = 'TK'; //'TF'
            $table64->tipo_letra = 'B';
            $table64->estado = 'B';
            $table64->usuario_creacion = 1;
            $table64->usuario_modificacion = 1;
            $table64->save();

            $table65 = new TipoComprobanteAfip;
            $table65->descripcion = 'TIQUE';
            $table65->codigo_afip = '083';
            $table65->tipo_comprobante = 'TK'; //'TF'
            $table65->tipo_letra = 'X';
            $table65->estado = 'B';
            $table65->usuario_creacion = 1;
            $table65->usuario_modificacion = 1;
            $table65->save();

            $table66 = new TipoComprobanteAfip;
            $table66->descripcion = 'NOTA DE CREDITO OTROS COMP QUE NO CUMPLEN CON LA R G 1415 Y SUS MODIF';
            $table66->codigo_afip = '090';
            $table66->tipo_comprobante = 'NC'; //'TF'
            $table66->tipo_letra = 'X';
            $table66->estado = 'B';
            $table66->usuario_creacion = 1;
            $table66->usuario_modificacion = 1;
            $table66->save();

            $table67 = new TipoComprobanteAfip;
            $table67->descripcion = 'OTROS COMP QUE NO CUMPLEN CON LA R G 1415 Y SUS MODIF';
            $table67->codigo_afip = '099';
            $table67->tipo_comprobante = 'NC'; //'TF'
            $table67->tipo_letra = 'X';
            $table67->estado = 'B';
            $table67->usuario_creacion = 1;
            $table67->usuario_modificacion = 1;
            $table67->save();

            $table68 = new TipoComprobanteAfip;
            $table68->descripcion = 'TIQUE C';
            $table68->codigo_afip = '109';
            $table68->tipo_comprobante = 'TK'; //'TF'
            $table68->tipo_letra = 'C';
            $table68->estado = 'B';
            $table68->usuario_creacion = 1;
            $table68->usuario_modificacion = 1;
            $table68->save();

            $table69 = new TipoComprobanteAfip;
            $table69->descripcion = 'TIQUE NOTA DE CREDITO';
            $table69->codigo_afip = '110';
            $table69->tipo_comprobante = 'NC'; //'TNC'
            $table69->tipo_letra = 'X';
            $table69->estado = 'B';
            $table69->usuario_creacion = 1;
            $table69->usuario_modificacion = 1;
            $table69->save();


    }
}
