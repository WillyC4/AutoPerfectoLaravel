@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-5 rounded-lg">
        <h2 class="text-primary fw-bold text-center">Ranking de Autos según {{ implode(', ', $criteriosSeleccionados) }}</h2>
        <br>
        @if ($rankingAutos->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Seguridad</th>
                            @foreach ($criteriosSeleccionados as $criterio)
                                <th>{{ ucfirst($criterio) }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rankingAutos as $auto)
                        <tr>
                            <td>{{ $auto->marca }}</td>
                            <td>{{ $auto->modelo }}</td>
                            <td>{{ $auto->anio }}</td>
                            <td>{{ $auto->seguridad }} estrellas</td>
                            @foreach ($criteriosSeleccionados as $criterio)
                                <td>{{ $auto->$criterio }}</td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center fw-bold text-danger mt-4">No se encontraron autos para el ranking.</p>
        @endif
    </div>
</div>
@endsection