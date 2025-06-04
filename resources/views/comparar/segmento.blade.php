@extends('layout')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-5 rounded-lg text-center" style="max-width: 500px;">
        <h2 class="text-primary fw-bold mb-4">Comparar Segmento de Mercado</h2>

        <form action="{{ route('comparar.segmento_resultados') }}" method="GET">

            <div class="mb-4">
                <label for="auto1" class="form-label fw-bold">Selecciona el primer auto:</label>
                <select name="auto1" class="form-select rounded-sm shadow-sm">
                    @foreach ($autos as $auto)
                        <option value="{{ $auto->id }}">{{ $auto->marca }} {{ $auto->modelo }} ({{ $auto->anio }})</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-4">
                <label for="auto2" class="form-label fw-bold">Selecciona el segundo auto:</label>
                <select name="auto2" class="form-select rounded-sm shadow-sm">
                    @foreach ($autos as $auto)
                        <option value="{{ $auto->id }}">{{ $auto->marca }} {{ $auto->modelo }} ({{ $auto->anio }})</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-success rounded-pill shadow-sm">
                Comparar Autos
            </button>
        </form>
    </div>
</div>
@endsection