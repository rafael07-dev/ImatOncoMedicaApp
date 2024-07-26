<?php

namespace App\Http\Controllers;
use App\Models\Equipo;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EquipoController extends Controller
{
    public function index()
    {
        return Inertia::render('Equipo/Index', [
            'equipos' => Equipo::all()
        ]);
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_inventario' => 'required|unique:equipos',
            'nombre' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required',
            'frecuencia' => 'required',
        ]);

        Equipo::create($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo agregado exitosamente.');
    }

    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required',
            'frecuencia' => 'required|integer',
        ]);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado exitosamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado exitosamente.');
    }
}
