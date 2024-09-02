<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'module_id',
        'titre',
        'pdf_path',
    ];
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
