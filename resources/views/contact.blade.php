@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 animate__animated animate__fadeInDown">
        <h1 class="fw-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <i class="fa-solid fa-envelope text-info me-2"></i>Let's Connect
        </h1>
        <p class="text-muted fs-5">
            Got ideas or questions? I’d love to hear from you!
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card border-0 shadow-sm rounded-5 p-4" style="background: #ffffffcc;">
                <form action="{{ route('contact.send') }}" method="POST" novalidate>
                    @csrf

                    <div class="form-floating mb-4">
                        <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            name="name" 
                            placeholder="Your Full Name" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus>
                        <label for="name"><i class="fa-solid fa-user me-1"></i> Your Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            placeholder="name@example.com" 
                            value="{{ old('email') }}" 
                            required>
                        <label for="email"><i class="fa-solid fa-envelope me-1"></i> Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <textarea 
                            class="form-control @error('message') is-invalid @enderror" 
                            placeholder="Leave your message here" 
                            id="message" 
                            name="message" 
                            style="height: 120px;" 
                            required>{{ old('message') }}</textarea>
                        <label for="message"><i class="fa-solid fa-comment-dots me-1"></i> Your Message</label>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-info w-100 fw-semibold shadow-sm">
                        <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection