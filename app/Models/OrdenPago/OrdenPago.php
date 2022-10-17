<?php

namespace App\Models\OrdenPago;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
    use HasFactory;

    protected $table = "ordenes_pago";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
