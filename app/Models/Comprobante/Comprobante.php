<?php

namespace App\Models\Comprobante;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Comprobante extends BaseModel
{


    protected $table = "comprobantes";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
