<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_inventario',
        'nombre',
        'tipo',
        'marca',
        'modelo',
        'serie',
        'frecuencia',
    ];
}
