@extends('layouts.myapp')

@section('title', 'Detalle')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalle del trabajo</h3>
        </div>
        <div class="card-body">
            <p><strong>Equipo:</strong> {{ $trabajo->equipo->tipo->name }}</p>
            <p><strong>Fecha:</strong> {{ $trabajo->fecha }}</p>
            <p><strong>Hora de inicio:</strong> {{ $date->parse($trabajo->horaInicio, 'UTC')->isoFormat('h:mm a') }}</p>
            <p><strong>Hora de finalización:</strong> {{ $date->parse($trabajo->horaFin, 'UTC')->isoFormat('h:mm a') }}</p>
            <p><strong>Tiempo transcurrido:</strong>
                {{ $date->create($trabajo->horaFin)->locale('es')->longRelativeDiffForHumans($date->create($trabajo->horaInicio)->locale('es'), 2) }}
            </p>
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
