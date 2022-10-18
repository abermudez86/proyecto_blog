<?php

namespace App\Models\OrdenPago;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class OrdenPago extends BaseModel
{
    protected $table = "ordenes_pago";

    protected $primaryKey = 'id_orden_pago';

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable  = [
        'id_orden_pago',
        'id_participante',
        'id_actividad',
        'nro_pago',
        'fecha_pago',
        'monto',
        'usuario_creacion',
        'fecha_creacion',
        'observaciones',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
