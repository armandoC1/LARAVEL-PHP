@extends('layouts.app')

@section('content')
    <h1>Editar estudiante</h1>
    <form action="{{route('estudiantes.update', $estudiante->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="ofrm-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$estudiante->nombre}}"
                required>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{$estudiante->apellido}}"
                required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $estudiante->email}}"
                required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Modificar</button>
                <a href="{{ route('estudiantes.index')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
