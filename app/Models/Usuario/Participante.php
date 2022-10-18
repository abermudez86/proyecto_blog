<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Participante extends BaseModel
{
    public $table = "participantes";

    protected $primaryKey = 'id';

    protected $fillable  = [
        'id',
        'name',
        'email',
        'estado',
    ];
}
