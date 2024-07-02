@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{session('success')}}
        </div>
    @endif
    <h1>Lista de estudiantes</h1>
    <br>
    <form action="{{ route('estudiantes.index')}}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-label" name="apellido" placeholder="Apellido">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('estudiantes.create')}}" class="btn btn-secondary">Ir a crear</a>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>E-mail</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->nombre}}</td>
                <td>{{ $estudiante->apellido}}</td>
                <td>{{ $estudiante->email}}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('estudiantes.edit', $estudiante->id)}}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('estudiantes.show', $estudiante->id)}}", class="btn btn-info">Ver</a>
                            <a href="{{ route('estudiates.delete', $estudiante->id)}}", class="btn btn-danger">Eliminar</a>
                        </td>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{$estudiantes->links()}}
        </div>
    </div>

@endsection
