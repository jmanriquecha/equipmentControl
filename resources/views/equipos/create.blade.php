@extends('layouts.myapp')
@section('title', 'Crear equipo')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Crear equipo</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('equipos') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="marca_id" class="form-label">Marca</label>
                    <select class="form-select form-control" aria-label="Default select example" name="marca_id"
                        id="marca_id">
                        <option value="0" selected>Por favor seleccione una marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}">
                                {{ $marca->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tipo_id" class="form-label">Tipo</label>
                    <select class="form-select form-control" aria-label="Default select example" name="tipo_id"
                        id="tipo_id">
                        <option value="0" selected>Por favor seleccione un tipo</option>
                        @foreach ($tipos as $tipo)
                            <option value="{{ $tipo->id }}">
                                {{ $tipo->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo </label>
                    <input type="text" class="form-control" id="modelo" name="modelo"
                        placeholder="Ingrese el modelo">
                </div>
                <div class="mb-3">
                    <label for="serial" class="form-label">Serial </label>
                    <input type="text" class="form-control" id="serial" name="serial"
                        placeholder="Ingrese el serial">
                </div>
                <div class="mb-3">
                    <label for="observacion" class="form-label">Observaciones</label>
                    <textarea class="form-control" id="observacion" name="observacion" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
