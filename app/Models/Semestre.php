<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
