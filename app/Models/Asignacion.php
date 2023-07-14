<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
}
