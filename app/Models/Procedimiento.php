<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tiempo_respuesta',
    ];

    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }
    public function doceumento_temp()
    {
        return $this->hasMany(DocumentoTemp::class);
    }
    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
}
