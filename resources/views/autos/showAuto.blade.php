@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold">Auto Details</h2>
        <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">⬅ Back</a>
    </div>

    <div class="card p-4 shadow-lg bg-white">
        <div class="card-body">
            <h3 class="fw-bold text-center text-primary mb-4">Información del Auto</h3>

            <div class="mb-3">
                <strong class="fw-bold">Marca:</strong>
                <span class="text-secondary">{{ $auto->marca }}</span>
            </div>

            <div class="mb-3">
                <strong class="fw-bold">Modelo:</strong>
                <span class="text-secondary">{{ $auto->modelo }}</span>
            </div>

            <div class="mb-3">
                <strong class="fw-bold">Año:</strong>
                <span class="text-secondary">{{ $auto->anio }}</span>
            </div>
        </div>
    </div>
</div>
@endsection