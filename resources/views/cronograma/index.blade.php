@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cronograma de Mantenimiento</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Equipo</th>
                <th>Tipo de Equipo</th>
                <th>Código de Inventario</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Ubicación</th>
                <th>Área</th>
                <th>Razón Social</th>
                <th>Torre</th>
                <th>Piso</th>
                <th>Responsable</th>
                @for ($i = 1; $i <= 12; $i++)
                    <th>{{ DateTime::createFromFormat('!m', $i)->format('F') }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            @foreach ($cronogramas as $cronograma)
            <tr>
                <td>{{ $cronograma->id }}</td>
                <td>{{ $cronograma->nombre }}</td>
                <td>{{ $cronograma->tipo_equipo }}</td>
                <td>{{ $cronograma->codigo_inventario }}</td>
                <td>{{ $cronograma->marca }}</td>
                <td>{{ $cronograma->modelo }}</td>
                <td>{{ $cronograma->serie }}</td>
                <td>{{ $cronograma->ubicacion }}</td>
                <td>{{ $cronograma->area }}</td>
                <td>{{ $cronograma->razon_social }}</td>
                <td>{{ $cronograma->torre }}</td>
                <td>{{ $cronograma->piso }}</td>
                <td>{{ $cronograma->responsable->nombre }} {{ $cronograma->responsable->apellido }}</td>
                @for ($i = 1; $i <= 12; $i++)
                    @php
                    $month = str_pad($i, 2, '0', STR_PAD_LEFT);
                    $mantenimientos = $cronograma->historial_mantenimientos->where('fecha_inicio', '>=', now()->startOfYear()->addMonths($i - 1))->where('fecha_inicio', '<', now()->startOfYear()->addMonths($i));
                    @endphp
                    <td>
                        @foreach ($mantenimientos as $mantenimiento)
                            {{ $mantenimiento->numero_mantenimientos }} ({{ $mantenimiento->actividad }})
                        @endforeach
                    </td>
                @endfor
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection