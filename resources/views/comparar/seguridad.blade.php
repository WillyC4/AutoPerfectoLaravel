@extends('layout')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-5 rounded-lg text-center" style="max-width: 500px;">
        <h2 class="text-primary fw-bold mb-4">Comparar Seguridad</h2>
        <br>
        <form action="{{ route('comparar.resultado') }}" method="GET">
            <input type="hidden" name="tipo" value="seguridad">

            <div class="mb-4">
                <label for="seguridad" class="form-label fw-bold">Nivel mínimo de seguridad (1 a 5):</label>
                <input type="number" name="seguridad" id="seguridad" class="form-control rounded-sm shadow-sm" min="1" max="5" value="4" required>
            </div>

            <div class="mb-4">
                <label for="criterio" class="form-label fw-bold">Selecciona el criterio adicional:</label>
                <select name="criterio" class="form-select rounded-sm shadow-sm">
                    <option value="rendimiento">Rendimiento</option>
                    <option value="capacidad_maletero">Capacidad Maletero</option>
                    <option value="potencia_hp">Potencia</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success rounded-pill shadow-sm">
                Comparar Seguridad
            </button>
        </form>
    </div>
</div>
@endsection
