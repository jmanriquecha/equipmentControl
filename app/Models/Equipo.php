<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo extends Model
{
    use HasFactory;

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    public function trabajos(): HasMany
    {
        return $this->hasMany(Trabajo::class);
    }
}
