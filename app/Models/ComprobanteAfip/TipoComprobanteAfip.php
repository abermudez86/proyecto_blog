<?php

namespace App\Models\ComprobanteAfip;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class TipoComprobanteAfip extends BaseModel
{


    public $table = "tipos_comprobante_afip";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
