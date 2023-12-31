<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];

    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
}
