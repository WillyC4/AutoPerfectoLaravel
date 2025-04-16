@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg bg-white" style="width: 400px;">
        <h2 class="text-center mb-3 fw-bold text-primary">Log In to Your Account</h2>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    class="form-control border-secondary"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control border-secondary"
                    required
                >
            </div>

            <button type="submit" class="btn btn-primary w-100">Log in</button>

            <!-- Validation errors -->
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection