@extends('layouts.myapp')

@section('title', 'Detalle')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detalle de la marca</h3>
        </div>
        <div class="card-body"><strong>Marca:</strong> {{ $marca->name }}</div>
        <div class="card-footer">
            <small>
                Fecha de creación: {{ $marca->created_at }}
                @if ($marca->created_at == $marca->updated_at)
                    | Sin actualizaciones
                @else
                    | Fecha de actualización: {{ $marca->updated_at }}
                @endif
            </small>
        </div>
    </div>
@endsection
