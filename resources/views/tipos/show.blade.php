@extends('layouts.myapp')

@section('title', 'Detalle')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalle de la tipo</h3>
        </div>
        <div class="card-body"><strong>Marca:</strong> {{ $tipo->name }}</div>
        <div class="card-footer">
            <small>
                Fecha de creación: {{ $tipo->created_at }}
                @if ($tipo->created_at == $tipo->updated_at)
                    | Sin actualizaciones
                @else
                    | Fecha de actualización: {{ $tipo->updated_at }}
                @endif
            </small>
        </div>
    </div>
@endsection
