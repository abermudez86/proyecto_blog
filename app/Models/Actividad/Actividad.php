<?php

namespace App\Models\Actividad;

use App\Models\BaseModel;

class Actividad extends BaseModel
{
    protected $table = "actividades";

    protected $primaryKey = 'id_actividad';

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [
        'id_actividad',
        'descripcion',
        'fecha_inicio',
        'periodo_pago',
        'total_pagos',
        'monto',
        'usuario_creacion',
        'fecha_creacion',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];

}
