<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    use HasFactory;

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class);
    }

    public function goles()
    {
        return $this->hasMany(Gol::class);
    }
}
