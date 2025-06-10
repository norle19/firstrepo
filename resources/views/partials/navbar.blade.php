<style>
  .header, .navbar-custom {
    height: 48px;
    background-color: #000 !important; /* black */
  }

  .header .container span,
  .navbar-custom .navbar-brand,
  .navbar-custom .nav-link,
  .navbar-custom .nav-link.active,
  .navbar-custom .nav-link:hover,
  .navbar-custom .nav-link:focus,
  .navbar-custom .nav-item span.nav-link {
    color: #fff !important; /* white text for contrast */
  }

  .navbar-custom .nav-link.active,
  .navbar-custom .nav-link:hover,
  .navbar-custom .nav-link:focus {
    font-weight: 600; /* fw-semibold */
  }

  /* Spacer div to offset fixed header + navbar */
  .spacer {
    height: 96px; /* 48px header + 48px navbar */
  }

  /* Logout button styling for dark navbar */
  .navbar-custom form button.btn-outline-danger {
    color: #fff;
    border-color: #fff;
  }

  .navbar-custom form button.btn-outline-danger:hover {
    background-color: #dc3545; /* Bootstrap danger red */
    border-color: #dc3545;
    color: #fff;
  }
</style>

<header class="fixed-top header" style="z-index: 1051;">
  <div class="container d-flex justify-content-between align-items-center h-100">
  </div>
</header>

@auth
<nav class="navbar navbar-expand-lg fixed-top navbar-custom border-bottom shadow-sm animate__animated animate__fadeInDown" style="top: 48px;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">
      <i class="fa-solid fa-code me-1"></i> Personal devs
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
      aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      {{-- LEFT SIDE NAV LINKS --}}
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
      <i class="fa-solid fa-house me-1"></i> Home
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
      <i class="fa-solid fa-user me-1"></i> About
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">
      <i class="fa-solid fa-diagram-project me-1"></i> Projects
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
      <i class="fa-solid fa-envelope me-1"></i> Contact
    </a>
  </li>
</ul>


      {{-- RIGHT SIDE USER INFO AND LOGOUT --}}
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item me-3">
          <span class="nav-link fw-semibold">
            <i class="fa-solid fa-user me-1"></i>{{ Auth::user()->name }}
          </span>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">
              <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endauth
<div class="spacer"></div>
