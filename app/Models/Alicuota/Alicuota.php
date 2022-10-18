<?php

namespace App\Models\Alicuota;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Alicuota extends BaseModel
{
    protected $table = "alicuotas";

    protected $primaryKey = 'id_actividad';

    protected $fillable  = [
        'id_alicuota',
        'descripcion',
        'codigo_afip',
        'estado'
    ];

    public $timestamps = false;
}
