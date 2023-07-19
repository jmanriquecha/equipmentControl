@extends('layouts.myapp')
@section('title', 'Listado de tipos')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Listado de tipos</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('tipos/create') }}" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Creación</th>
                            <th scope="col">Actualizado</th>
                            <th colspan="3" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo->name }}</td>
                                <td>{{ $tipo->created_at }}</td>
                                <td>{{ $tipo->updated_at }}</td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('tipos/' . $tipo->id) }}" class="btn btn-success">Ver</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('tipos/' . $tipo->id . '/edit') }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <form name="delete" class="d-inline" action="{{ url('tipos/' . $tipo->id) }}"
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
            {{ $tipos->links() }}
        </div>
    </div>
@endsection
