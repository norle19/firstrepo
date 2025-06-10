@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-sm p-5 rounded-4" style="width: 100%; max-width: 380px; background: #fff;">
        <h2 class="text-center mb-4 text-primary fw-bold">
            <i class="fa-solid fa-user-plus me-2"></i>Create an Account
        </h2>

        @if(session('error'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-circle-exclamation me-2"></i>
                <div>{{ session('error') }}</div>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label fw-semibold">
                    <i class="fa-solid fa-user me-2"></i>Full Name
                </label>
                <input 
                    type="text" 
                    name="name" 
                    id="name"
                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" 
                    required
                    placeholder="Your full name"
                >
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="form-label fw-semibold">
                    <i class="fa-solid fa-envelope me-2"></i>Email Address
                </label>
                <input 
                    type="email" 
                    name="email" 
                    id="email"
                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" 
                    required
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
                    name="password" 
                    id="password"
                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                    required
                    placeholder="Enter your password"
                >
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label fw-semibold">
                    <i class="fa-solid fa-lock me-2"></i>Confirm Password
                </label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    id="password_confirmation"
                    class="form-control form-control-lg" 
                    required
                    placeholder="Confirm your password"
                >
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                    <i class="fa-solid fa-user-plus me-2"></i> Register
                </button>
            </div>

            <div class="text-center">
                <small class="text-muted">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">
                        Login
                    </a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection
