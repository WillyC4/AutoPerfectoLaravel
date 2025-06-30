@extends('layout')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-5 rounded-lg" style="max-width: 500px;">
        <h2 class="text-primary fw-bold mb-4">Ranking de Autos</h2>

        <form action="{{ route('comparar.resultado') }}" method="GET">
            {{-- Indicamos el tipo de comparador dinámico --}}
            <input type="hidden" name="tipo" value="ranking">

            {{-- Selección de criterios --}}
            <div class="mb-4">
                <label class="form-label fw-bold">Selecciona los criterios de ranking:</label>

                <div class="form-check text-start my-2">
                    <input class="form-check-input ms-2" type="checkbox" name="criterios[]" value="precio">
                    <label class="form-check-label">Precio</label>
                </div>

                <div class="form-check text-start my-2">
                    <input class="form-check-input ms-2" type="checkbox" name="criterios[]" value="rendimiento">
                    <label class="form-check-label">Rendimiento (L/100km)</label>
                </div>

                <div class="form-check text-start my-2">
                    <input class="form-check-input ms-2" type="checkbox" name="criterios[]" value="potencia_hp">
                    <label class="form-check-label">Potencia (HP)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success rounded-pill shadow-sm">
                Ver Ranking
            </button>
        </form>
    </div>
</div>
@endsection
