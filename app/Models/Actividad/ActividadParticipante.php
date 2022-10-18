<?php

namespace App\Models\Actividad;

use App\Models\BaseModel;

class ActividadParticipante extends BaseModel
{
    protected $table = "actividades_participantes";

    protected $primaryKey = ['id_actividad', 'renglon'];

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [
        'id_actividad',
        'renglon',
        'id_participante',
        'observaciones',
        'usuario_creacion',
        'fecha_creacion',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];

}
