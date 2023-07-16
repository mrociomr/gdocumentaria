<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];

    public function area()
    {
        //return $this->hasMany(Area::class);
        return $this->hasMany(Area::class);
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
