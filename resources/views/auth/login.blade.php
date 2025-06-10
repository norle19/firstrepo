@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-sm p-5 rounded-4" style="width: 100%; max-width: 380px; background: #fff;">
        <h2 class="text-center btn-info w-100 fw-semibold shadow-sm">
            <i class="fa-solid fa-right-to-bracket me-2"></i>Login
        </h2>

        @if(session('error'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-circle-exclamation me-2"></i>
                <div>{{ session('error') }}</div>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="form-label fw-semibold">
                    <i class="fa-solid fa-envelope me-2"></i>Email address
                </label>
                <input 
                    type="email" 
                    class="form-control form-control-lg @error('email') is-invalid @enderror" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required autofocus
                    placeholder="you@example.com"
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label fw-semibold">
                    <i class="fa-solid fa-lock me-2"></i>Password
                </label>
                <input 
                    type="password" 
                    class="form-control form-control-lg @error('password') is-invalid @enderror" 
                    id="password" 
                    name="password" 
                    required
                    placeholder="Enter your password"
                >
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid mb-3">
             <button type="submit" class="btn btn-dark w-100 fw-semibold shadow-sm">
                     <i class="fa-solid fa-arrow-right-to-bracket me-2"></i> Login
             </button>
            </div>

            <div class="text-center">
                <small class="text-muted">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-primary fw-semibold text-decoration-none">
                        Register
                    </a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection
