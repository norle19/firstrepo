<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

@stack('scripts') 

<body class="bg-light">

    @include('partials.navbar')

    <main class="container mt-5">
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-5 bg-dark text-white">
        &copy; {{ date('Y') }} All rights reserved.
    </footer>

    @push('scripts')
    <script>
        window.addEventListener('load', function () {
            window.scrollTo({ top: 0, behavior: 'auto' });
        });
    </script>
    @endpush

</body>
</html>
