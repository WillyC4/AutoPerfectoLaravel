@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Registrar Nuevo Auto</h2>
        <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">Volver</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger text-center rounded-pill py-2">
            Hay algunos problemas con tu registro.<br><br>
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
                    <input type="text" name="marca" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label fw-bold">Modelo:</label>
                    <input type="text" name="modelo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="anio" class="form-label fw-bold">Año:</label>
                    <input type="number" name="anio" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label fw-bold">Precio:</label>
                    <input type="number" name="precio" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="rendimiento" class="form-label fw-bold">Rendimiento (L/100km):</label>
                    <input type="number" step="0.1" name="rendimiento" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="seguridad" class="form-label fw-bold">Seguridad (Estrellas LatinNCAP):</label>
                    <input type="number" name="seguridad" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="tipo_traccion" class="form-label fw-bold">Tracción:</label>
                    <select name="tipo_traccion" class="form-select">
                        <option value="FWD">FWD</option>
                        <option value="RWD">RWD</option>
                        <option value="AWD">AWD</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="potencia_hp" class="form-label fw-bold">Potencia (HP):</label>
                    <input type="number" name="potencia_hp" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="capacidad_maletero" class="form-label fw-bold">Capacidad de Maletero (L):</label>
                    <input type="number" name="capacidad_maletero" class="form-control">
                </div>

                <button type="submit" class="btn btn-success w-100">Registrar</button>
            </form>
        </div>
    </div>
</div>
@endsection