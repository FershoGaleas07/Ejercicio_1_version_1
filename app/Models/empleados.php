<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empleados extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre_empleado',
        'email_empleado',
        'telefono_empleado',
        'contrasena_empleado',
        'direccion_empleado',
        'rol',
        'avatar_empleado'

    ];
}
