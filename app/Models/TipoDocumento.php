<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];

    public function documento_temp()
    {
        return $this->hasMany(DocumentoTemp::class);
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }
}
