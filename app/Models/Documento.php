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

    public static $rule = [
        'nombres' => 'required',
        'dni' => 'required|numeric|min:8',
        'ap_paterno' => 'required',
        'ap_materno' => 'required',
        'direccion' => 'required',
        'correo' => 'required',
        'celular' => 'required',
        // 'numero_doc' => 'required',
        'folios' => 'required',
        'asunto' => 'required',
        'archivo' => 'required|max:2048',
        'fecha_ingreso' => 'required',
        'fecha_doc' => 'required',
        'num_tramite' => 'required',
        'observaciones' => 'required',
        'estado' => 'required',
        'inf_respuesta' => 'required',
        // 'administrado_id' => 'required',
        // 'tipo_documento_id' => 'required',
        // 'indicacion_id' => 'required',
        // 'procedimiento_id' => 'required',
        // 'oficina_id' => 'required',
        // 'asignacion_id' => 'required',
        // 'movimiento_id' => 'required',
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

    public function incremento()
    {
        $contador = Documento::latest()->first()->numero_doc??null;
        if($contador==null){
            return 1;
        }else{
            return $contador = $contador + 1;
        }

        // return $contador;
    }
}
