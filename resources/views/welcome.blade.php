@extends('layout')

@section('content')
<div class="hero-section d-flex flex-column align-items-start justify-content-center text-white px-5">
    <h3 class="fontSize2 fw-light">Bienvenidos a</h3>  
    <h2 class="fontSize1 fw-bold" style="font-family: 'Krona One', sans-serif;">AutoPerfecto</h2> 
    <h4 class="fontSize2 fw-light">Concesionario Personalizado</h4>
    <br>


    @auth
        @if (Auth::user()->role === 'admin')
            <a class="btn btn-primary rounded-pill px-4" href="{{ route('autos.index') }}">Continuar</a>
        @endif
                
        @if (Auth::user()->role === 'cliente')
                <a class="btn btn-primary rounded-pill px-4" href="{{ route('comparar.index') }}">Continuar</a>
        @endif
    @endauth
</div>

<style>
    .hero-section {
        background: url('{{ asset("images/Fondo.jpg") }}') no-repeat center center;
        background-size: cover;
        height: 683px;
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