@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-5 rounded-lg">
        @php
            $criterioExtra = request()->input('criterio', 'rendimiento');
        @endphp

        <h2 class="text-primary fw-bold text-center">
            Comparación de Seguridad con {{ ucfirst($criterioExtra) }}
        </h2>
        <br>

        @if ($resultado->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Seguridad</th>
                            <th>{{ ucfirst($criterioExtra) }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultado as $auto)
                        <tr>
                            <td>{{ $auto->marca }}</td>
                            <td>{{ $auto->modelo }}</td>
                            <td>{{ $auto->anio }}</td>
                            <td>{{ $auto->seguridad }} estrellas</td>
                            <td>{{ $auto->$criterioExtra }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center fw-bold text-danger mt-4">
                No hay autos disponibles para esta comparación.
            </p>
        @endif
    </div>
</div>
@endsection
