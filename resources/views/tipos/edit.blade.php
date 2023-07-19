@extends('layouts.myapp')
@section('title', 'Crear tipo')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Editar Tipo</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('tipos/' . $tipo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="nombre" value="{{ $tipo->name }}"
                        aria-describedby="emailHelp" placeholder="Enter tipo">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
