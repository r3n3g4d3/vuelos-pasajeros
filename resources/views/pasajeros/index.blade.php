<!-- resources/views/pasajeros/index.blade.php -->

@extends('layouts.base')

@section('content')
    <h1>Lista de Pasajeros</h1>
    <a href="{{ route('pasajeros.create') }}" class="btn btn-primary mb-2">Agregar Pasajero</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasajeros as $pasajero)
                <tr>
                    <td>{{ $pasajero->id }}</td>
                    <td>{{ $pasajero->nombre }}</td>
                    <td>{{ $pasajero->cedula }}</td>
                    <td>
                        <a href="{{ route('pasajeros.show', $pasajero->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('pasajeros.edit', $pasajero->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <!-- Formulario para eliminar el pasajero -->
                        <form action="{{ route('pasajeros.destroy', $pasajero->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
