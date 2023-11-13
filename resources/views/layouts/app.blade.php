<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <a href="{{ route('cart.index') }}" class="btn btn-primary">Mi carrito</a>
                    <a href="{{ route('categorias/belleza') }}" class="btn btn-primary">Belleza</a>
                    <a href="{{ route('categorias/tecnologia') }}" class="btn btn-primary">tecnologia</a>
                    <a href="{{ route('categorias/fragances') }}" class="btn btn-primary">fragances</a>
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content') {{-- Cambiado de {{ $slot }} a @yield('content') --}}
        </main>
    </div>
</body>
</html>
