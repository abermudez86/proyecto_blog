<?php

namespace App\Models\Alicuota;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class AlicuotaAfip extends BaseModel
{

    protected $table = "alicuotas_afip";
    //protected $fillable  = ['descripcion','codigo_afip','estado'];
    protected $primaryKey = 'id_alicuota';

    //public $timestamps = false;
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
