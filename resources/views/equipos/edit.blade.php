@extends('layouts.myapp')
@section('title', 'Crear equipo')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Crear equipo</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('equipos/' . $equipo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="marca_id" class="form-label">Marca</label>
                    <select class="form-select form-control" aria-label="Default select example" name="marca_id"
                        id="marca_id">
                        @foreach ($marcas as $marca)
                            @php
                                if ($marca->id === $equipo->marca_id) {
                                    $flag = 'selected';
                                } else {
                                    $flag = '';
                                }
                            @endphp
                            <option value='{{ $marca->id }}' {{ $flag }}>{{ $marca->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tipo_id" class="form-label">Tipo</label>
                    <select class="form-select form-control" aria-label="Default select example" name="tipo_id"
                        id="tipo_id">
                        @foreach ($tipos as $tipo)
                            @php
                                if ($tipo->id === $equipo->tipo_id) {
                                    $flag = 'selected';
                                } else {
                                    $flag = '';
                                }
                            @endphp
                            <option value='{{ $tipo->id }}' {{ $flag }}>{{ $tipo->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo </label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $equipo->modelo }}"
                        placeholder="Ingrese el modelo">
                </div>
                <div class="mb-3">
                    <label for="serial" class="form-label">Serial </label>
                    <input type="text" class="form-control" id="serial" name="serial" value="{{ $equipo->serial }}"
                        placeholder="Ingrese el serial">
                </div>
                <div class="mb-3">
                    <label for="observacion" class="form-label">Observaciones</label>
                    <textarea class="form-control" id="observacion" name="observacion" rows="3">{{ $equipo->observacion }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
