@extends('layouts.app')

@section('content')
    <h1>Ver docente</h1>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-labael">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$estudiante->nombre}}" disabled>
        </div>
        <div class="col-md-4">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" value="{{$estudiante->apellido}}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $estudiante->email}}" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('estudiantes.index')}}" class="btn btn-primary">Retornar/regresar</a>
        </div>
    </div>
@endsection
