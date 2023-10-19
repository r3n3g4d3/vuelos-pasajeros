@extends('layouts.base')

@section('content')
    <h1>Crear Ticket</h1>
    <!-- Formulario de creación de ticket -->
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pasajero_id">Pasajero:</label>
            <select class="form-control" id="pasajero_id" name="pasajero_id" required>
                @foreach($pasajeros as $pasajero)
                    <option value="{{ $pasajero->id }}">{{ $pasajero->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="vuelo_id">Vuelo:</label>
            <select class="form-control" id="vuelo_id" name="vuelo_id" required>
                @foreach($vuelos as $vuelo)
                    <option value="{{ $vuelo->id }}">{{ $vuelo->aerolinea }} - {{ $vuelo->origen }} to {{ $vuelo->destino }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ticket">Ticket:</label>
            <input type="text" class="form-control" id="ticket" name="ticket" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
