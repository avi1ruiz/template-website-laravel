<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="generator" content={Astro.generator} />

    {{-- Icono --}}
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" />
    {{-- Fuentes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&family=Rubik+Puddles&family=Signika+Negative:wght@500;700&display=swap"
        rel="stylesheet">
    {{-- Slider --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    {{-- Estilos y javascript --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <title>@yield('title')</title>
</head>

<body>
    <nav class="nav flex">
        {{-- Brand --}}
        <a href="#home" class="nav-brand"><i class="fa-solid fa-code"></i></a>
        {{-- Menu --}}
        <ul class="nav-link flex">
            <li class="nav-item"><a href="#projects">Projects</a></li>
            <li class="nav-item"><a href="#repositories">Repositories</a></li>
            <li class="nav-item"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
    <ul class="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>
