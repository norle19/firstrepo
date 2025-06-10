@extends('layouts.app')

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

    <div class="text-center mt-5">
        <h5><i class="fa-brands fa-github me-2 text-dark"></i>Explore More Projects</h5>
        <a href="https://github.com/NorleSarmen" target="_blank" class="btn btn-dark mt-3 shadow-sm">
            <i class="fa-brands fa-github me-1"></i> Visit My GitHub
        </a>
    </div>

</div>
@endsection
