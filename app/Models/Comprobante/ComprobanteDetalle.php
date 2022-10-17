<?php

namespace App\Models\Comprobante;

use Thiagoprz\CompositeKey\HasCompositeKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComprobanteDetalle extends Model
{
    use HasFactory; use HasCompositeKey;

    protected $table = "comprobantes_detalle";

    protected $primaryKey = ['id_comprobante', 'renglon'];

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
