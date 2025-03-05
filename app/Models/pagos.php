<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pagos extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'fk_empleados',
        'fk_reservacion',
        'fk_metodos_pagos',
        'precio_total'
    ];
}
