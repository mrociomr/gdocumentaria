<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoTemp extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_doc',
        'folios',
        'asunto',
        'archivo',
        'fecha_ingreso',
        'estado',
        'administrado_id',
        'tipo_documento_id',
        'procedimiento_id',
        'oficina_id'
    ];
}
