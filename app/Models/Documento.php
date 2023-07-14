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

    public function administrado()
    {
        return $this->belongsTo(Administrado::class);
    }

    public function tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function indicacion()
    {
        return $this->belongsTo(Indicacion::class);
    }
    public function procedimiento()
    {
        return $this->belongsTo(Procedimiento::class);
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }

    public function asignacion()
    {
        return $this->belongsTo(Asignacion::class);
    }

    public function movimiento()
    {
        return $this->belongsTo(Movimiento::class);
    }
}
