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
}
