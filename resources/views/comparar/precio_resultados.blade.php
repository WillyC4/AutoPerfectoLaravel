@extends('layout')

@section('content')
<div class="container">
    <h2 class="text-center my-4 fw-bold text-primary">Autos Disponibles</h2>

    <h4 class="text-center">
        Rango: ${{ number_format($precioBase - $rango, 0) }} a ${{ number_format($precioBase + $rango, 0) }} y 
        Prioridad: {{ ucfirst($prioridad) }}
    </h4>
    <br>
    @if ($autos->count() > 0)
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Precio</th>
                    <th>Rendimiento</th>
                    <th>Capacidad Maletero</th>
                    <th>Potencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autos as $auto)
                <tr>
                    <td>{{ $auto->marca }}</td>
                    <td>{{ $auto->modelo }}</td>
                    <td>{{ $auto->anio }}</td>
                    <td>${{ number_format($auto->precio, 2) }}</td>
                    <td>{{ $auto->rendimiento }}</td>
                    <td>{{ $auto->capacidad_maletero }} L</td>
                    <td>{{ $auto->potencia_hp }} HP</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center fw-bold text-danger">No se encontraron autos en el rango de precio indicado.</p>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('comparar.precio') }}" class="btn btn-primary">Volver a Comparar</a>
    </div>
</div>
@endsection