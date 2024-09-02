<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD extends Model
{
    protected $table = 'tds';
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
