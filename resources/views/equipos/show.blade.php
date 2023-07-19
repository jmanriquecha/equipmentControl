@extends('layouts.myapp')

@section('title', 'Detalle')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalle del equipo</h3>
        </div>
        <div class="card-body">
            <p><strong>Marca:</strong> {{ $equipo->marca->name }}</p>
            <p><strong>Tipo:</strong> {{ $equipo->tipo->name }}</p>
            <p><strong>Modelo:</strong> {{ $equipo->modelo }}</p>
            <p><strong>Serial:</strong> {{ $equipo->serial }}</p>
            <p><strong>Observacion:</strong> {{ $equipo->observacion }}</p>
        </div>
        <div class="card-footer">
            <small>
                Fecha de creación: {{ $equipo->created_at }}
                @if ($equipo->created_at == $equipo->updated_at)
                    | Sin actualizaciones
                @else
                    | Fecha de actualización: {{ $equipo->updated_at }}
                @endif
            </small>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <strong>Cantidad de trabajos realizados: </strong> {{ $trabajos->count() }}
        </div>
    </div>
@endsection
