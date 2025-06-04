@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary fw-bold text-center">Autos Disponibles</h2>

    <div class="d-flex justify-content-between mb-3">
        <a class="btn btn-success rounded-pill px-4" href="{{ route('autos.create') }}">
            + Registrar Auto
        </a>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success text-center py-2 fw-bold">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped text-center shadow-sm">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Precio</th>
                    <th>Rendimiento</th>
                    <th>Seguridad</th>
                    <th>Tracción</th>
                    <th>Potencia</th>
                    <th>Maletero</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autos as $auto)
                <tr>
                    <td class="fw-bold text-center">{{ $auto->id }}</td>
                    <td>{{ $auto->marca }}</td>
                    <td>{{ $auto->modelo }}</td>
                    <td>{{ $auto->anio }}</td>
                    <td>${{ number_format($auto->precio, 2) }}</td>
                    <td>{{ $auto->rendimiento }} L/100km</td>
                    <td>{{ $auto->seguridad }} estrellas</td>
                    <td>{{ $auto->tipo_traccion }}</td>
                    <td>{{ $auto->potencia_hp }} HP</td>
                    <td>{{ $auto->capacidad_maletero }} L</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('autos.show', $auto->id) }}">Ver</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('autos.edit', $auto->id) }}">Editar</a>
                        <form action="{{ route('autos.destroy', $auto->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este auto?');">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {!! $autos->links() !!}
    </div>
</div>
@endsection