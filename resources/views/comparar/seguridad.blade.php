@extends('layout')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-5 rounded-lg text-center" style="max-width: 500px;">
        <h2 class="text-primary fw-bold mb-4">Comparar Seguridad</h2>
        <br>
        <form action="{{ route('comparar.seguridad_resultados') }}" method="GET">

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