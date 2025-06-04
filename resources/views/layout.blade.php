<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <div class="d-flex align-items-center">
            <a class="navbar-brand fw-bold text-white" href="/" style="font-family: 'Krona One', sans-serif;">AutoPerfecto</a>


            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('autos.index') }}" class="text-white ml-3">Gestion de Vehículos</a>
                    <a href="{{ route('usuarios.index') }}" class="text-white ml-3">Gestion de Usuarios</a>
                @endif
                
                @if (Auth::user()->role === 'admin' || Auth::user()->role === 'cliente')
                    <a href="{{ route('comparar.index') }}" class="text-white ml-3">Comparar</a>
                @endif
            @endauth
        </div>

        <div class="ml-auto d-flex align-items-center">
            @guest
                <span class="border-right pr-2 text-white">Hola, Bienvenido!</span>
                <a href="{{ route('show.login') }}" class="btn btn-primary ml-2">Login</a>
                <a href="{{ route('show.register') }}" class="btn btn-success ml-2">Register</a>
            @endguest

            @auth
                <span class="border-right pr-2 text-white">Hola, {{ Auth::user()->name }}!</span>
                <form action="{{ route('logout') }}" method="POST" class="ml-2">
                    @csrf
                    <button type="submit" class="btn btn-danger">Salir</button>
                </form>
            @endauth
        </div>
    </nav>
</header>

@yield('content')

</body>
</html>