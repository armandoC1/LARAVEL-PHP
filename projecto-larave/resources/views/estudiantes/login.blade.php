@extends('layouts.app')

@section('content')
<h1>Login estudiante</h1>
<form action="{{ route('estudiantes.login') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="text" class="form-control" name="email" id="email" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="pin" class="form-label">Pin</label>
            <input type="password" class="form-control" name="pin" id="pin" required>
        </div>
    </div>
    <br>
    <div style="margin-top: 2%" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
    <div style="margin-top: 10%" class="row">
        @error('InvalidCredentials')
            <div class="alert alert-danger fade show" id="success-message" data-bs-dismiss="alert" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
</form>
@endsection
