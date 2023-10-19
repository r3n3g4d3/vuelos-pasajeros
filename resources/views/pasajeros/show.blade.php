@extends('layouts.base)

@section('content')
    <h1>Detalles del Pasajero</h1>
    <p><strong>ID:</strong> {{ $pasajero->id }}</p>
    <p><strong>Nombre:</strong> {{ $pasajero->nombre }}</p>
    <p><strong>Cédula:</strong> {{ $pasajero->cedula }}</p>
    <a href="{{ route('pasajeros.edit', $pasajero->id) }}" class="btn btn-primary">Editar</a>
    <!-- Formulario para eliminar el pasajero -->
    <form action="{{ route('pasajeros.destroy', $pasajero->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
