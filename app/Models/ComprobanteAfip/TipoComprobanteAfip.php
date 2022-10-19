<?php

namespace App\Models\ComprobanteAfip;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class TipoComprobanteAfip extends BaseModel
{
    public $table = "tipos_comprobante_afip";

    protected $primaryKey = 'id_tipo_comprobante';

    public $timestamps = true;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable  = [
        'id_tipo_comprobante',
        'tipo_comprobante',
        'tipo_letra',
        'descripcion',
        'codigo_afip',  //código del lado de AFIP
        'usuario_creacion',
        'fecha_creacion',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
