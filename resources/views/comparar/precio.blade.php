@extends('layout')

@section('content')
<div class="container">
    <h2 class="text-center my-4 fw-bold text-primary">Buscar tu AutoPerfecto</h2>

    <form action="{{ route('comparar.resultado') }}" method="GET" class="card p-4 shadow-lg mx-auto" style="max-width: 500px;">
        {{-- Input oculto para indicar el tipo de comparador --}}
        <input type="hidden" name="tipo" value="precio">

        <div class="mb-3">
            <label for="precio" class="form-label fw-bold">Precio Base:</label>
            <input type="number" class="form-control" name="precio" id="precio" required>
        </div>

        <div class="mb-3">
            <label for="rango" class="form-label fw-bold">Rango de Variación:</label>
            <input type="number" class="form-control" name="rango" id="rango" required>
        </div>

        <div class="mb-3">
            <label for="prioridad" class="form-label fw-bold">Prioridad de Comparación:</label>
            <select class="form-select" name="prioridad" id="prioridad" required>
                <option value="rendimiento">Rendimiento</option>
                <option value="capacidad_maletero">Capacidad de Maletero</option>
                <option value="potencia_hp">Potencia</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary fw-bold">Comparar Autos</button>
        </div>
    </form>
</div>
@endsection
