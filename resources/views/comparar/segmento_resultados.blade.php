@extends('layout')

@section('content')
<div class="container">
    <h2 class="text-center my-4 fw-bold text-primary">Comparación de Segmento de Mercado</h2>

    <h3 class="text-center">Autos Seleccionados:</h3>
    <div class="d-flex justify-content-center gap-4">
        <div class="card p-3 shadow">
            <h4>{{ $auto1->marca }} {{ $auto1->modelo }} ({{ $auto1->anio }})</h4>
            <p class="fw-bold text-success">${{ number_format($auto1->precio, 2) }}</p>
        </div>
        <div class="card p-3 shadow">
            <h4>{{ $auto2->marca }} {{ $auto2->modelo }} ({{ $auto2->anio }})</h4>
            <p class="fw-bold text-success">${{ number_format($auto2->precio, 2) }}</p>
        </div>
    </div>

    <h3 class="mt-4">Autos Similares Encontrados:</h3>
    @if ($autosSimilares->count() > 0)
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Seguridad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autosSimilares as $auto)
                <tr>
                    <td>{{ $auto->marca }}</td>
                    <td>{{ $auto->modelo }}</td>
                    <td>{{ $auto->anio }}</td>
                    <td>{{ $auto->seguridad }} estrellas</td>
                    <td class="fw-bold text-success">${{ number_format($auto->precio, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center fw-bold text-danger">No se encontraron autos similares.</p>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('comparar.segmento') }}" class="btn btn-primary">Volver a Comparar</a>
    </div>
</div>
@endsection