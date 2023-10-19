@extends('layouts.base')

@section('content')
    <h1>Detalles del Vuelo</h1>
    <p><strong>ID:</strong> {{ $vuelo->id }}</p>
    <p><strong>Aerolínea:</strong> {{ $vuelo->aerolinea }}</p>
    <p><strong>Origen:</strong> {{ $vuelo->origen }}</p>
    <p><strong>Destino:</strong> {{ $vuelo->destino }}</p>
    <a href="{{ route('vuelos.edit', $vuelo->id) }}" class="btn btn-primary">Editar</a>
    <!-- Formulario para eliminar el vuelo -->
    <form action="{{ route('vuelos.destroy', $vuelo->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
