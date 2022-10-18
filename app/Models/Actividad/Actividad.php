<?php

namespace App\Models\Actividad;

use App\Models\BaseModel;

class Actividad extends BaseModel
{
    protected $table = "actividades";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

}
