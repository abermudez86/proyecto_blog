<?php

namespace App\Models\Comprobante;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Comprobante extends BaseModel
{
    protected $table = "comprobantes";

    protected $primaryKey = 'id_comprobante';

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable  = [
        'id_comprobante',
        'id_tipo_comprobante',
        'id_participante',
        'monto_total',
        'iva',
        'usuario_creacion',
        'fecha_creacion',
        'observaciones',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
