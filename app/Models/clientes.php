<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'telefono',
        'Direccion',
        'Edad',
        'Tipo_licencia',
        'Avatar_usuario'


    ];
}
