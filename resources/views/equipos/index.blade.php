@extends('layouts.app')

@section('content')
<div class="container flex justify-center">
    <div>
        <h1 class="font-bold">Lista de Equipos</h1>
        <a href="{{ route('equipos.create') }}" class="bg-green-500 text-white py-1 px-2 rounded hover:bg-green-600 mt-5">Agregar Nuevo Equipo</a>
        <table class="bg-white border border-gray-300 mt-5">
            <thead class="bg-gray">
                <tr class="bg-gray-800 text-white">
                    <th class="px-4 border border-b border-gray-300">ID</th>
                    <th class="px-4 border border-b border-gray-300">Nombre</th>
                    <th class="px-4 border border-b border-gray-300">Tipo</th>
                    <th class="px-4 border border-b border-gray-300">Código de Inventario</th>
                    <th class="px-4 border border-b border-gray-300">Marca</th>
                    <th class="px-4 border border-b border-gray-300">Modelo</th>
                    <th class="px-4 border border-b border-gray-300">Serie</th>
                    <th class="px-4 border border-b border-gray-300">Frecuencia</th>
                    <th class="px-4 border border-b border-gray-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                <tr class="hover:bg-gray-100">
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->id }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->nombre }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->tipo }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->numero_inventario }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->marca }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->modelo }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->serie }}</td>
                    <td class="px-2 border border-b border-gray-300">{{ $equipo->frecuencia }}</td>
                    <td class="flex h-auto border border-b border-gray-300">
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-600 ml-2">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="bg-yellow-500 text-white py-1 px-2 rounded hover:bg-yellow-600 ml-2">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-600 ml-2" onclick="return confirm('¿Estás seguro de eliminar este equipo?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Modal -->
    <div id="createEquipoModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Agregar Nuevo Equipo</h3>
                            <div class="mt-2">
                                <form id="createEquipoForm" action="{{ route('equipos.store') }}">
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
                                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="frecuencia" name="frecuencia" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection