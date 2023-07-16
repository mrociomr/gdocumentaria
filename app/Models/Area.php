<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    
    ];
    public function oficina()
    {
        //return $this->hasMany(Oficina::class);
        return $this->belongsTo(Oficina::class);
    }
}
