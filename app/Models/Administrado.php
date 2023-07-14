<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrado extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'ap_paterno',
        'ap_materno',
        'direccion',
        'correo',
        'celular',
        'razon_social',
        'departamento'
    ];

}
