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
                            <th scope="col">Inicio</th>
                            <th scope="col">Finalización</th>
                            <th scope="col">Observación</th>
                            <th scope="col" colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trabajos as $trabajo)
                            <tr>
                                <td>
                                    <a href="{{ url('equipos/' . $trabajo->equipo->id) }}">{{ $trabajo->equipo->tipo->name }}
                                        {{ $trabajo->equipo->marca->name }}</a>
                                </td>
                                <td>{{ $trabajo->fecha }}</td>
                                <td>{{ $date->parse($trabajo->horaInicio, 'UTC')->isoFormat('h:mm a') }}
                                </td>
                                <td>
                                    {{ $date->create($trabajo->horaFin)->locale('es')->longRelativeDiffForHumans($date->create($trabajo->horaInicio)->locale('es'), 2) }}
                                </td>
                                <td>{{ $trabajo->observacion }}</td>
                                <td class="p-0 align-middle">
                                    <a href="{{ url('trabajos/' . $trabajo->id) }}" class="btn btn-success">Ver</a>
                                </td>
                                <td class="p-0 align-middle">
                                    <a href="{{ url('trabajos/' . $trabajo->id . '/edit') }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td class="p-0 align-middle">
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
        <div class="col-12 ml-0 p-0 d-flex justify-content-center">
            {{ $trabajos->onEachSide(0)->links() }}
        </div>
    </div>
@endsection
