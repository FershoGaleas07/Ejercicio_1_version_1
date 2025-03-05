<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class autos extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'marca',
        'modelo',
        'motor',
        'color',
        'año',
        'placa',
        'Numero_asientos',
        'Aire_acondicionado',
        'Detalles_desperfectos',
        'Disponibilidad_vehiculo',
        'Precio_base'
    ];
}
