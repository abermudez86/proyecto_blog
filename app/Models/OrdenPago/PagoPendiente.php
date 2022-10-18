<?php

namespace App\Models\OrdenPago;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class PagoPendiente extends BaseModel
{
    protected $table = "pagos_pendientes";

    protected $primaryKey = 'codigo';

    protected $fillable  = [
        'codigo',
        'id_participante',
        'id_actividad',
        'nro_pago',
        'fecha_pago as fecha_vencimiento',
        'monto',
        'observaciones'
    ];
}
