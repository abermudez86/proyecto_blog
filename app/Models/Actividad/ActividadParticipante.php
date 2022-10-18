<?php

namespace App\Models\Actividad;

use App\Models\BaseModel;

class ActividadParticipante extends BaseModel
{


    protected $table = "actividades_participantes";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
