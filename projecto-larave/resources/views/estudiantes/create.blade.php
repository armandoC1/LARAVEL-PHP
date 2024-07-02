@extends('layouts.app')

@section('content')
    <h1>Crear nuevo estudiante</h1>
    <form action="{{route('estudiantes.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="pin" class="form-label">Pin</label>
                <input type="password" class="form-control" name="pin" id="pin">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="{{route('estudiantes.index')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
