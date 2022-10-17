<?php

namespace App\Models\Comprobante;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    protected $table = "comprobantes";

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
}
