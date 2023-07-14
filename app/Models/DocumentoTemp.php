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

    public function tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }
    public function administrado()
    {
        return $this->belongsTo(Administrado::class);
    }
    public function procedimiento()
    {
        return $this->belongsTo(Procedimiento::class);
    }
    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
}
