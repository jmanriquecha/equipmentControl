@extends('layouts.myapp')
@section('title', 'Listado de equipos')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Listado de equipos</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('equipos/create') }}" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marca</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Observaciones</th>
                            <th colspan="3" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                            <tr>
                                <td>{{ $equipo->marca->name }}</td>
                                <td>{{ $equipo->tipo->name }}</td>
                                <td>{{ $equipo->modelo }}</td>
                                <td>{{ $equipo->serial }}</td>
                                <td>{{ $equipo->observacion }}</td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('equipos/' . $equipo->id) }}" class="btn btn-success">Ver</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('equipos/' . $equipo->id . '/edit') }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <form name="delete" class="d-inline" action="{{ url('equipos/' . $equipo->id) }}"
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
                {{ $equipos->links() }}
            </div>
        </div>
    </div>
@endsection
