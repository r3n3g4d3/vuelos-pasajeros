@extends('layouts.base')

@section('content')
    <h1>Editar Pasajero</h1>
    <!-- Formulario de edición de pasajero -->
    <form action="{{ route('pasajeros.update', $pasajero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $pasajero->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="cedula">Cédula:</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $pasajero->cedula }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
