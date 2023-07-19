@extends('layouts.myapp')
@section('title', 'Listado de trabajos realizados')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Listado de trabajos</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('trabajos/create') }}" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Equipo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora inicio</th>
                            <th scope="col">Hora fin</th>
                            <th scope="col">Observacion</th>
                            <th colspan="3" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trabajos as $trabajo)
                            <tr>
                                <td>{{ $trabajo->equipo->tipo->name }} {{ $trabajo->equipo->marca->name }}</td>
                                <td>{{ $trabajo->fecha }}</td>
                                <td>{{ $trabajo->horaInicio }}</td>
                                <td>{{ $trabajo->horaFin }}</td>
                                <td>{{ $trabajo->observacion }}</td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('trabajos/' . $trabajo->id) }}" class="btn btn-success">Ver</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('trabajos/' . $trabajo->id . '/edit') }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <form name="delete" class="d-inline" action="{{ url('trabajos/' . $trabajo->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-1 m-0 row justify-content-center align-items-center">
            {{ $trabajos->links() }}
        </div>
    </div>
@endsection
