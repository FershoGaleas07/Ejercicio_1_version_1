<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class resenas extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'fk_clientes',
        'fk_auto',
        'calificacion',
        'comentario'
    ];
}
