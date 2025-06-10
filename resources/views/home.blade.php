@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container py-5">

    {{-- Hero Section --}}
<div class="row align-items-center mb-5 hero-section border border-1 rounded shadow-sm p-4">
    <div class="col-md-6 animate__animated animate__fadeInLeft">
        <h1 class="fw-bold">
            Hi, I'm <i class="fa-solid fa-user me-1"></i>{{ Auth::user()->name }}</span>
            
        </h1>
        <p class="text-muted mt-3 animate__animated animate__fadeInUp animate__delay-1s">
            Computer Science student passionate about web development using Laravel, Bootstrap, and JavaScript.
        </p>
        <a href="{{ route('about') }}" class="btn btn-dark mt-3 animate__animated animate__zoomIn animate__delay-2s">
            <i class="fa-solid fa-user me-1"></i> About Me
        </a>
    </div>
    <div class="col-md-6 text-center animate__animated animate__fadeInRight">
        <img src="{{ asset('images/norle.jpg') }}" alt="Norle Maputi Sarmen"
            class="img-fluid w-50 rounded-circle border border-2 shadow"
              style="border-color: black;">
    </div>
</div>

@push('scripts')
<style>
    .feature-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        cursor: pointer;
        border: 1.5px solid #dee2e6;
    }

    .feature-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        background-color: #f8f9fa;
        border-color: #0d6efd;
    }

    .hero-section {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1.5px solid #dee2e6;
        background-color: #ffffff;
    }

    .hero-section:hover {
        transform: scale(1.01);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border-color: #0d6efd;
    }
</style>
@endpush


    {{-- Features --}}
    <div class="row text-center gy-4">
    <div class="col-md-4 d-flex">
        <div class="p-4 bg-light rounded shadow-sm feature-card w-100 h-100">
            <i class="fa-solid fa-code fa-xl text-primary mb-2"></i>
            <h5>Web Development</h5>
            <p>Creating secure and scalable Laravel apps.</p>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <div class="p-4 bg-light rounded shadow-sm feature-card w-100 h-100">
            <i class="fa-solid fa-diagram-project fa-xl text-success mb-2"></i>
            <h5>My Projects</h5>
            <p>See my recent coding work and portfolio.</p>
            <a href="{{ route('projects') }}" class="btn btn-sm btn-outline-success mt-2">
                View Projects
            </a>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <div class="p-4 bg-light rounded shadow-sm feature-card w-100 h-100">
            <i class="fa-solid fa-envelope fa-xl text-danger mb-2"></i>
            <h5>Contact Me</h5>
            <p>Let's collaborate or discuss ideas!</p>
            <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-danger mt-2">
                Get in Touch
            </a>
        </div>
    </div>
</div>

</div>

@push('scripts')
<style>
    .feature-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        cursor: pointer;
        border: 1.5px solid #dee2e6; /* Light gray border */
    }
    .feature-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        background-color: #f8f9fa;
        border-color: #0d6efd; /* Bootstrap primary color on hover */
    }
</style>
@endpush

@endsection

projects.blade @extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold display-5 text-dark">
            <i class="fa-solid fa-diagram-project me-2 text-primary"></i>My Projects
        </h1>
        <p class="text-muted fs-5">A collection of apps and systems I’ve built during my journey as a Computer Science student.</p>
    </div>

    <div class="row g-4">
        <!-- Project 1 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-primary mb-2">
                        <i class="fa-solid fa-building me-2"></i>Barangay E-Service
                    </h5>
                    <p class="card-text text-muted">
                        A Laravel-based system for residents to request certifications, permits, and other documents online.
                    </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-sm btn-primary">
                       
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-success mb-2">
                        <i class="fa-solid fa-wallet me-2"></i>FinEdu
                    </h5>
                    <p class="card-text text-muted">
                        A mobile-friendly app that helps students improve financial literacy using eBooks and budget tools.
                    </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-sm btn-success">
                       
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-warning mb-2">
                        <i class="fa-solid fa-face-smile me-2"></i>Facial Expression Recognition
                    </h5>
                    <p class="card-text text-muted">
                        A deep learning system trained on the CK+ dataset to classify human emotions using Python and OpenCV.
                    </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-sm btn-warning text-dark">
                       
                    </a>
                </div>
            </div>
        </div>
    </div>
//nokey
    <div class="text-center mt-5">
        <h5><i class="fa-brands fa-github me-2 text-dark"></i>Explore More Projects</h5>
        <a href="https://github.com/NorleSarmen" target="_blank" class="btn btn-dark mt-3 shadow-sm">
            <i class="fa-brands fa-github me-1"></i> Visit My GitHub
        </a>
    </div>

</div>
@endsection
