@extends('layout')

@section('content')
<h2>Comparación de Segmento de Mercado</h2>

<h3>Autos Seleccionados:</h3>
<ul>
    <li>{{ $auto1->marca }} {{ $auto1->modelo }} ({{ $auto1->anio }}) - ${{ number_format($auto1->precio, 2) }}</li>
    <li>{{ $auto2->marca }} {{ $auto2->modelo }} ({{ $auto2->anio }}) - ${{ number_format($auto2->precio, 2) }}</li>
</ul>

<h3>Autos Similares Encontrados:</h3>
@if ($autosSimilares->count() > 0)
    <table class="table">
        <thead>
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
                <td>${{ number_format($auto->precio, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-center fw-bold text-danger">No se encontraron autos similares.</p>
@endif
@endsection