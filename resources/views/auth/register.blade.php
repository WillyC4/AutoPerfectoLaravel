@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h2 class="text-center mb-3 fw-bold text-primary">Register for an Account</h2>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input 
                    type="text" 
                    name="name" 
                    value="{{ old('name') }}" 
                    class="form-control"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    class="form-control"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password:</label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    class="form-control"
                    required
                >
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>

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