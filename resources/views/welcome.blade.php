@extends('layout')

@section('content')
<div class="hero-section d-flex flex-column align-items-start justify-content-center text-white px-5">
    <h3 class="fontSize2 fw-light">Bienvenidos a</h3>  
    <h1 class="fontSize1 fw-bold">AutoPerfecto</h1> 
    <h4 class="fontSize2 fw-light">Concesionario Personalizado</h4>
    <br>
    @auth
        <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">Continuar</a>
    @endauth
</div>

<style>
    .hero-section {
        background: url('{{ asset("images/Fondo.jpg") }}') no-repeat center center;
        background-size: cover;
        height: 648px;
        width: 100%;
        position: relative;
    }

    .hero-section h1, .hero-section p {
        top: 50%;
        left: 50%;
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);
    }

    .fontSize1 {
        font-size: 80px;
        font-weight: bold;
    }

    .fontSize2 {
        font-size: 40px;
    }

</style>
@endsection