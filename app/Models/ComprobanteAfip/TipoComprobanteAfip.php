<?php

namespace App\Models\ComprobanteAfip;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoComprobanteAfip extends Model
{
    use HasFactory;

    public $table = "tipos_comprobante_afip";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
