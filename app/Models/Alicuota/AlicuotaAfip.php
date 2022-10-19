<?php

namespace App\Models\Alicuota;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class AlicuotaAfip extends BaseModel
{

    protected $table = "alicuotas_afip";

    protected $primaryKey = 'id_alicuota';

    public $timestamps = true;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable  = [
        'id_alicuota',
        'descripcion',
        'codigo_afip',
        'usuario_creacion',
        'fecha_creacion',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
