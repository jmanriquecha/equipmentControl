@extends('layouts.myapp')
@section('title', 'Crear marca')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Crear marca</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('marcas/' . $marca->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="nombre" value="{{ $marca->name }}"
                        aria-describedby="emailHelp" placeholder="Enter marca">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
