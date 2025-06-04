@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Información del Auto</h2>
        <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">Volver</a>
    </div>

    <div class="card p-4 shadow-lg bg-white">
        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th>Marca</th>
                    <td>{{ $auto->marca }}</td>
                </tr>
                <tr>
                    <th>Modelo</th>
                    <td>{{ $auto->modelo }}</td>
                </tr>
                <tr>
                    <th>Año</th>
                    <td>{{ $auto->anio }}</td>
                </tr>
                <tr>
                    <th>Precio</th>
                    <td>${{ number_format($auto->precio, 2) }}</td>
                </tr>
                <tr>
                    <th>Rendimiento</th>
                    <td>{{ $auto->rendimiento }} L/100km</td>
                </tr>
                <tr>
                    <th>Seguridad</th>
                    <td>{{ $auto->seguridad }} estrellas</td>
                </tr>
                <tr>
                    <th>Tipo de Tracción</th>
                    <td>{{ $auto->tipo_traccion }}</td>
                </tr>
                <tr>
                    <th>Potencia</th>
                    <td>{{ $auto->potencia_hp }} HP</td>
                </tr>
                <tr>
                    <th>Capacidad de Maletero</th>
                    <td>{{ $auto->capacidad_maletero }} L</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection