@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Editar Auto</h2>
        <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">Volver</a>
    </div>

    <div class="card p-4 shadow-lg">
        <div class="card-body">
            <form action="{{ route('autos.update', $auto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="marca" class="form-label fw-bold">Marca:</label>
                    <input type="text" name="marca" value="{{ $auto->marca }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label fw-bold">Modelo:</label>
                    <input type="text" name="modelo" value="{{ $auto->modelo }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="anio" class="form-label fw-bold">Año:</label>
                    <input type="number" name="anio" value="{{ $auto->anio }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label fw-bold">Precio:</label>
                    <input type="number" name="precio" value="{{ $auto->precio }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="rendimiento" class="form-label fw-bold">Rendimiento (L/100km):</label>
                    <input type="number" step="0.1" name="rendimiento" value="{{ $auto->rendimiento }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="seguridad" class="form-label fw-bold">Seguridad:</label>
                    <input type="number" name="seguridad" value="{{ $auto->seguridad }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="tipo_traccion" class="form-label fw-bold">Tracción:</label>
                    <select name="tipo_traccion" class="form-select">
                        <option value="FWD" {{ $auto->tipo_traccion == 'FWD' ? 'selected' : '' }}>FWD</option>
                        <option value="RWD" {{ $auto->tipo_traccion == 'RWD' ? 'selected' : '' }}>RWD</option>
                        <option value="AWD" {{ $auto->tipo_traccion == 'AWD' ? 'selected' : '' }}>AWD</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="potencia_hp" class="form-label fw-bold">Potencia (HP):</label>
                    <input type="number" name="potencia_hp" value="{{ $auto->potencia_hp }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="capacidad_maletero" class="form-label fw-bold">Capacidad de Maletero (L):</label>
                    <input type="number" name="capacidad_maletero" value="{{ $auto->capacidad_maletero }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
@endsection