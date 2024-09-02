<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function cours()
    {
        return $this->hasOne(Cours::class);
    }

    public function tps()
    {
        return $this->hasOne(TP::class);
    }

    public function tds()
    {
        return $this->hasOne(TD::class);
    }
}

