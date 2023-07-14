<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoExterno extends Model
{
    use HasFactory;

    public function movimiento()
    {
        return $this->hasMany(Movimiento::class);
    }
}
