@extends('layouts.myapp')

@section('title', 'Detalle')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalle del trabajo</h3>
        </div>
        <div class="card-body">
            <p><strong>Marca:</strong> {{ $trabajo->equipo->tipo->name }}</p>
            <p><strong>Tipo:</strong> {{ $trabajo->fecha }}</p>
            <p><strong>Modelo:</strong> {{ $trabajo->horaInicio }}</p>
            <p><strong>Serial:</strong> {{ $trabajo->horaFin }}</p>
            <p><strong>Observacion:</strong> {{ $trabajo->observacion }}</p>
        </div>
        <div class="card-footer">
            <small>
                Fecha de creación: {{ $trabajo->created_at }}
                @if ($trabajo->created_at == $trabajo->updated_at)
                    | Sin actualizaciones
                @else
                    | Fecha de actualización: {{ $trabajo->updated_at }}
                @endif
            </small>
        </div>
    </div>
@endsection
