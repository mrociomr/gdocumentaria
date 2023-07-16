<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'dni',
        'ap_paterno',
        'ap_materno',
        'direccion',
        'correo',
        'celular',
        'razon_social',
        'tipo_persona_id',
    ];

    // public static $rules = [
        
        // 'razon_social' => 'required',
        // 'departamento' => 'required',
        // 'tipo_persona_id' => 'required',
    // ];

    public function tipo_persona()
    {
        return $this->belongsTo(TipoPersona::class);
    }
    public function documento_temp()
    {
        return $this->hasMany(DocumentoTemp::class);
    }

    public function documento()
    {
        return $this->hasMany(Documento::class);
    }

}
