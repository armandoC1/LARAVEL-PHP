@extends('layouts.app')
 @section('content')
    <h1>Eliminar docente</h1>
    <form action="{{route('docentes.destroy', $docente->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control"  name="nombre" id="nombre" value="{{$docente->nombre}}"
                disabled>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{$docente->apellido}}"
                disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="email" id="email" value="{{$docente->email}}"
                disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Eliminar</button>
                <a href="{{route('docentes.index')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
 @endsection
