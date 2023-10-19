@extends('layouts.app')

@section('content')
    <h1>Editar Ticket</h1>
    <!-- Formulario de edición de ticket -->
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pasajero_id">Pasajero:</label>
            <select class="form-control" id="pasajero_id" name="pasajero_id" required>
                @foreach($pasajeros as $pasajero)
                    <option value="{{ $pasajero->id }}" {{ $ticket->pasajero_id == $pasajero->id ? 'selected' : '' }}>{{ $pasajero->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="vuelo_id">Vuelo:</label>
            <select class="form-control" id="vuelo_id" name="vuelo_id" required>
                @foreach($vuelos as $vuelo)
                    <option value="{{ $vuelo->id }}" {{ $ticket->vuelo_id == $vuelo->id ? 'selected' : '' }}>{{ $vuelo->aerolinea }} - {{ $vuelo->origen }} to {{ $vuelo->destino }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ticket">Ticket:</label>
            <input type="text" class="form-control" id="ticket" name="ticket" value="{{ $ticket->ticket }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
