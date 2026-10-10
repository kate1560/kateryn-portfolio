<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="@yield('description', 'Portafolio profesional de Kateryn Martínez, Desarrolladora Frontend Junior y Diseñadora Web UX/UI.')"
    >

    <title>@yield('title', 'Kateryn Martínez')</title>

    {{-- Favicon del portafolio --}}
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('favicon.png') }}"
    >

    {{-- Tipografías --}}
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    @stack('styles')
</head>

<body class="min-h-screen overflow-x-hidden bg-kate-cream text-kate-dark antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <x-whatsapp />

</body>

</html>