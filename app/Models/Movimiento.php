<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'are_origen',
        'oficina_origen',
        'usuario_origen',
        'estado',
        'fecha',
        'observacion',
        'tipo_movimiento',
        'movimiento_interno_id',
        'movimiento_externo_id',
    ];

    public function movimiento_externo()
    {
        return $this->belongsTo(MovimientoExterno::class);
    }

    public function moviento_interno()
    {
        return $this->belongsTo(MovimientoInterno::class);
    }

    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
}
