@extends('layouts.base')

@section('content')
    <h1>Lista de Vuelos</h1>
    <a href="{{ route('vuelos.create') }}" class="btn btn-primary mb-2">Agregar Vuelo</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Aerolínea</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vuelos as $vuelo)
                <tr>
                    <td>{{ $vuelo->id }}</td>
                    <td>{{ $vuelo->aerolinea }}</td>
                    <td>{{ $vuelo->origen }}</td>
                    <td>{{ $vuelo->destino }}</td>
                    <td>
                        <a href="{{ route('vuelos.show', $vuelo->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('vuelos.edit', $vuelo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <!-- Formulario para eliminar el vuelo -->
                        <form action="{{ route('vuelos.destroy', $vuelo->id) }}" method="POST" class="d-inline">
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
