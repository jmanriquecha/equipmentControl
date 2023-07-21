@extends('layouts.myapp')
@section('title', 'Listado de marcas')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Listado de marcas</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('marcas/create') }}" class="btn btn-primary">Nuevo</a>
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
                        @foreach ($marcas as $marca)
                            <tr>
                                <td>{{ $marca->name }}</td>
                                <td>{{ $marca->created_at }}</td>
                                <td>{{ $marca->updated_at }}</td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('marcas/' . $marca->id) }}" class="btn btn-success">Ver</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <a href="{{ url('marcas/' . $marca->id . '/edit') }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td class="pl-0 pr-0">
                                    <form name="delete" class="d-inline" action="{{ url('marcas/' . $marca->id) }}"
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
            {{ $marcas->onEachSide(0)->links() }}
        </div>
    </div>
@endsection
