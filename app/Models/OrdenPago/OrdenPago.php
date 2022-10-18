<?php

namespace App\Models\OrdenPago;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class OrdenPago extends BaseModel
{


    protected $table = "ordenes_pago";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
