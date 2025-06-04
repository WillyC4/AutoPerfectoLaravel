@extends('layout')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-5 rounded-lg text-center" style="max-width: 500px;">
        <h2 class="text-primary fw-bold mb-4">Elige una Comparación</h2>

    <div class="d-flex flex-column align-items-center gap-4">
        <a href="{{ route('comparar.seguridad') }}" class="btn btn-primary w-100 py-3 my-3 mx-auto">Comparación de Seguridad</a>
        <a href="{{ route('comparar.segmento') }}" class="btn btn-primary w-100 py-3 my-3 mx-auto">Comparación por Segmento</a>
        <a href="{{ route('comparar.ranking') }}" class="btn btn-primary w-100 py-3 my-3 mx-auto">Ranking de Autos</a>
    </div>

    </div>
</div>

@endsection