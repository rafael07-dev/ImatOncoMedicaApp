<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMantenimiento extends Model
{
    use HasFactory;

    public function cronograma()
    {
        return $this->belongsTo(Cronograma::class);
    }
}
