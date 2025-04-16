@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Registrar Nuevo Auto</h2>
        <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">⬅ Back</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger text-center rounded-pill py-2">
            <strong>Whoops!</strong> Hay algunos problemas con tu registro.<br><br>
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 shadow-lg">
        <div class="card-body">
            <form action="{{ route('autos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="marca" class="form-label fw-bold">Marca:</label>
                    <input type="text" name="marca" class="form-control border-secondary" placeholder="Marca">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label fw-bold">Modelo:</label>
                    <input type="text" name="modelo" class="form-control border-secondary" placeholder="Modelo">
                </div>

                <div class="mb-3">
                    <label for="anio" class="form-label fw-bold">Año:</label>
                    <input type="text" name="anio" class="form-control border-secondary" placeholder="Año">
                </div>

                <button type="submit" class="btn btn-success w-100">Registrar</button>
            </form>
        </div>
    </div>
</div>
@endsection