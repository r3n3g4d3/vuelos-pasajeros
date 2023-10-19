@extends('layouts.base')

@section('content')
    <h1>Listado de Tickets</h1>


    @if(optional($tickets)->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pasajero</th>
                    <th>Vuelo</th>
                    <th>Ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->pasajero->nombre }}</td>
                        <td>{{ $ticket->vuelo->aerolinea }} - {{ $ticket->vuelo->origen }} to {{ $ticket->vuelo->destino }}</td>
                        <td>{{ $ticket->ticket }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay tickets disponibles.</p>
    @endif
@endsection
