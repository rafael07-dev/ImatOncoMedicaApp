@extends('layouts.app')

@section('content')
<div class="container flex justify-center">
    <div class="bg-white h-auto rounded-lg w-96 border p-5">
        <h1 class="text-lg text-center leading-6 font-medium text-gray-900">Agregar Equipo</h1>
            <form class="" action="{{ route('equipos.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="numero_inventario" class="block text-gray-700">Número de Inventario</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="numero_inventario" name="numero_inventario" required>
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700">Nombre</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="nombre" name="nombre" required>
                </div>
                <div class="mb-4">
                    <label for="tipo" class="block text-gray-700">Tipo</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="tipo" name="tipo" required>
                </div>
                <div class="mb-4">
                    <label for="marca" class="block text-gray-700">Marca</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="marca" name="marca" required>
                </div>
                <div class="mb-4">
                    <label for="modelo" class="block text-gray-700">Modelo</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="modelo" name="modelo" required>
                </div>
                <div class="mb-4">
                    <label for="serie" class="block text-gray-700">Serie</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="serie" name="serie" required>
                </div>
                <div class="mb-4">
                    <label for="frecuencia" class="block text-gray-700">Frecuencia</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="frecuencia" name="frecuencia" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
                <a href="{{ route('equipos.store') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Cancelar</a>
            </form>
    </div>
</div>
@endsection