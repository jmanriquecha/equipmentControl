@extends('layouts.myapp')
@section('title', 'Crear trabajo')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Crear trabajo</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('trabajos') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="equipo_id" class="form-label">Equipo</label>
                    <select class="form-select form-control" aria-label="Default select example" name="equipo_id"
                        id="equipo_id">
                        <option value="0" selected>Por favor seleccione un equipo</option>
                        @foreach ($equipos as $equipo)
                            <option value="{{ $equipo->id }}">
                                {{ $equipo->tipo->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" aria-describedby="emailHelp"
                        placeholder="Enter fecha">
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label for="horaInicio">Hora Inicio</label>
                            <input type="time" class="form-control" id="horaInicio" name="horaInicio"
                                aria-describedby="emailHelp" placeholder="Enter Hora inicio">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="horaFin">Hora Fin</label>
                            <input type="time" class="form-control" id="horaFin" name="horaFin"
                                aria-describedby="emailHelp" placeholder="Enter Hora Fin">
                        </div>
                    </div>
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
