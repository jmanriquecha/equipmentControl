@extends('layouts.myapp')
@section('title', 'Crear tipo')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Crear tipo</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('tipos') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="nombre" aria-describedby="emailHelp"
                        placeholder="Enter tipo">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
