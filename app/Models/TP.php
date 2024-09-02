<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TP extends Model

{

    protected $table = 'tps';
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
