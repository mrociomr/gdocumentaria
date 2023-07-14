<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_doc',
        'folios',
        'asunto',
        'archivo',
        'fecha_ingreso',
        'fecha_doc',
        'num_tramite',
        'observaciones',
        'estado',
        'inf_respuesta',
        'administrado_id',
        'tipo_documento_id',
        'indicacion_id',
        'procedimiento_id',
        'oficina_id',
        'asignacion_id',
        'movimiento_id'
    ];
}
