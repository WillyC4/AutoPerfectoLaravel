<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
            <a class="navbar-brand fw-bold text-white" href="/">AutoPerfecto</a>
    
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
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endauth
            </div>
        </nav>
    </header>


{{-- 
<div class="container mt-4">
</div> 
--}}

@yield('content')

</body>
</html>