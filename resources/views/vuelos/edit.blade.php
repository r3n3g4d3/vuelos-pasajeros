@extends('layouts.base')

@section('content')
    <h1>Editar Vuelo</h1>
    <!-- Formulario de edición de vuelo -->
    <form action="{{ route('vuelos.update', $vuelo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="aerolinea">Aerolínea:</label>
            <input type="text" class="form-control" id="aerolinea" name="aerolinea" value="{{ $vuelo->aerolinea }}" required>
        </div>
        <div class="form-group">
            <label for="origen">Origen:</label>
            <input type="text" class="form-control" id="origen" name="origen" value="{{ $vuelo->origen }}" required>
        </div>
        <div class="form-group">
            <label for="destino">Destino:</label>
            <input type="text" class="form-control" id="destino" name="destino" value="{{ $vuelo->destino }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
