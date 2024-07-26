<?php

namespace App\Http\Controllers;

use App\Models\Cronograma;
use Illuminate\Http\Request;

class CronogramaController extends Controller
{
    public function index()  {

        $cronogramas = Cronograma::with(['historial_mantenimientos', 'responsable'])->get();
        return view('cronograma.index', compact('cronogramas'));
    }
}
