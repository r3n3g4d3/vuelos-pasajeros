@extends('layouts.base')

@section('content')
    <h1>Agregar Vuelo</h1>
    <!-- Formulario de creación de vuelo -->
    <form action="{{ route('vuelos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="aerolinea">Aerolínea:</label>
            <input type="text" class="form-control" id="aerolinea" name="aerolinea" required>
        </div>
        <div class="form-group">
            <label for="origen">Origen:</label>
            <input type="text" class="form-control" id="origen" name="origen" required>
        </div>
        <div class="form-group">
            <label for="destino">Destino:</label>
            <input type="text" class="form-control" id="destino" name="destino" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
