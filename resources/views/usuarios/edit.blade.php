@extends('layout')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-5 rounded-lg" style="max-width: 500px; width: 100%;">
        <h2 class="text-primary fw-bold text-center mb-4">Editar Usuario</h2>

        <form action="{{ route('usuarios.update', ['usuario' => $usuario->id]) }}" method="POST">
            @csrf
            @method('PATCH')


            <div class="mb-3">
                <label class="form-label fw-bold text-muted">Nombre:</label>
                <p class="form-control-plaintext border rounded px-3 py-2 bg-light">{{ $usuario->name }}</p>
            </div>


            <div class="mb-3">
                <label class="form-label fw-bold text-muted">Email:</label>
                <p class="form-control-plaintext border rounded px-3 py-2 bg-light">{{ $usuario->email }}</p>
            </div>

            
            <div class="mb-3">
                <label class="form-label fw-bold text-muted">Rol:</label>
                <select name="role">
                    <option value="cliente" @if($usuario->role == 'cliente') selected @endif>Cliente</option>
                    <option value="admin" @if($usuario->role == 'admin') selected @endif>Administrador</option>
                </select>
            </div>

            <div class="text-center d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg shadow-sm mx-3">Actualizar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary btn-lg shadow-sm mx-3">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection