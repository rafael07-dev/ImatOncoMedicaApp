<?php

namespace App\Http\Controllers;

use App\Models\Cronograma;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CronogramaController extends Controller
{
    public function index()  {

        return Inertia::render('Cronograma/Index', [
            'data' => Cronograma::all()
        ]);
    }
}
