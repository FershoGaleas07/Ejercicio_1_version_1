<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reservaciones extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [

        'fk_cliente',
        'fk_seguro',
        'fk_auto',
        'fecha_inicio',
        'fecha_fin',
        'disponibilidad_vehiculo',
        'cantidad_dias_reservado'
    ];
}
