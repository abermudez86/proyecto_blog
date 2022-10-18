<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class UsuarioDato extends BaseModel
{
    public $table = "usuario_datos";

    protected $primaryKey = 'id_user';

    protected $fillable  = [
        'id_user',
        'nombre',
        'apellido',
        'id_tipo_documento',
        'numero_documento',
        'email',
        'telefono',
        'genero',
        'estado',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
