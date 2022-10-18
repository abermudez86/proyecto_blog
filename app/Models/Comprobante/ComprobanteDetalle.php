<?php

namespace App\Models\Comprobante;

use Thiagoprz\CompositeKey\HasCompositeKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class ComprobanteDetalle extends BaseModel
{
     use HasCompositeKey;

    protected $table = "comprobante_detalles";

    protected $primaryKey = ['id_comprobante', 'renglon'];

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable  = [
        'id_comprobante',
        'renglon',
        'tipo_codigo', //'ORD'
        'codigo',     //'id_orden_pago'
        'fecha',
        'monto',
        'id_alicuota',
        'usuario_creacion',
        'fecha_creacion',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];

}
