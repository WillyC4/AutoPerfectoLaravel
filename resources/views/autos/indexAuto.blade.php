@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Autos</h2>
        <a class="btn btn-success rounded-pill px-4" href="{{ route('autos.create') }}">+ Registrar Nuevo Auto</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success text-center rounded-pill py-2">
            <p class="mb-0 fw-bold">{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover shadow-lg">
        <thead class="bg-primary text-white text-center">
            <tr>
                <th>No</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autos as $auto)
            <tr>
                <td class="fw-bold text-center">{{ $auto->id }}</td>
                <td>{{ $auto->marca }}</td>
                <td>{{ $auto->modelo }}</td>
                <td class="text-center">{{ $auto->anio }}</td>
                <td class="text-center">
                    <form action="{{ route('autos.destroy', $auto->id) }}" method="POST">
                        <a class="btn btn-info rounded-pill px-3" href="{{ route('autos.show', $auto->id) }}">Ver</a>
                        <a class="btn btn-primary rounded-pill px-3" href="{{ route('autos.edit', $auto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-pill px-3">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {!! $autos->links() !!}
    </div>
</div>
@endsection