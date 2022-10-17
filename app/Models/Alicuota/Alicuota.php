<?php

namespace App\Models\Alicuota;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alicuota extends Model
{
    use HasFactory;
    protected $table = "alicuotas";
    //protected $fillable  = ['descripcion','codigo_afip','estado'];

    public $timestamps = false;
}
