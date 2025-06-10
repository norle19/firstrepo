@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-primary"><i class="fa-solid fa-user me-2"></i>About Me</h1>
        <p class="text-muted">Hi, I'm Norle Maputi Sarmen — a passionate tech learner and web developer.</p>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-4 text-center mb-3">
            <img src="images/norle.jpg" class="img-fluid rounded-circle border border-3 border-light shadow" alt="Norle Maputi Sarmen">
        </div>
        <div class="col-md-8">
            <h3>Hello! 👋</h3>
            <p>I'm a Computer Science student from <strong>Surigao del Sur</strong>, skilled in Laravel, Tailwind CSS, and JavaScript. I enjoy solving problems and creating useful web apps that help people.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <h4><i class="fa-solid fa-graduation-cap me-2 text-primary"></i>Education</h4>
            <p><strong>B.S. in Computer Science</strong><br>North Eastern Mindanao State University (2022–2025)</p>
        </div>
        <div class="col-md-6">
            <h4><i class="fa-solid fa-briefcase me-2 text-primary"></i>Experience</h4>
            <p><strong>Intern - Web Developer</strong><br>Advanced Infinit Solutions (2025–Present)</p>
        </div>
    </div>

    <div class="mb-4">
        <h4><i class="fa-solid fa-heart text-danger me-2"></i>Interests</h4>
        <div class="d-flex flex-wrap gap-3">
            @php
                $interests = ['Web Dev', 'AI & ML', 'UI/UX', 'Nature Walks', 'Podcasts', 'Gaming'];
            @endphp
            @foreach ($interests as $item)
                <span class="badge bg-primary bg-opacity-10 text-primary p-2 px-3 rounded-pill shadow-sm">{{ $item }}</span>
            @endforeach
        </div>
    </div>
</div>
@endsection