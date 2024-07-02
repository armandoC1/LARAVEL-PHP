@extends('layouts.app')
@section('content')
<h1>Eliminar estudiante</h1>
<form action="{{route ('estudiantes.destroy', $estudiante->id)}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$estudiante->nombre}}"
            disabled>
        </div>
        <div class="col-md-4">
            <label for="apelliod" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" value="{{$estudiante->apellido}}"
            disabled>
        </div>
    </div>
    <div class="row">
        <div class="form-control">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$estudiante->email}}"
            disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Eliminar</button>
            <a href="{{route('estudiantes.index')}}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</form>
@endsection
