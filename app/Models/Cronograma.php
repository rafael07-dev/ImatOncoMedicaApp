<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cronograma extends Model
{
    use HasFactory;

    protected $table = 'cronograma';

    public function historial_mantenimientos()
    {
        return $this->hasMany(HistorialMantenimiento::class, 'cronograma_id');
    }

    public function responsable()
    {
        return $this->belongsTo(PersonalMantenimiento::class, 'responsable');
    }
}
