<?php

namespace App\Models\Actividad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadParticipante extends Model
{
    use HasFactory;

    protected $table = "actividades_participantes";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
