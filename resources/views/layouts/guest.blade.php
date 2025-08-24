<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Welcome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased font-sans text-gray-900 bg-gray-50 min-h-screen flex flex-col">

<!-- Navbar -->
<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <img src="{{ $logo ?? asset('images/default-logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="h-10 w-auto">
                    <span class="font-bold text-lg">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">Register</a>
                @else
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-900">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-gray-900">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow">
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
        {{ $slot }}
    </div>
</main>

<!-- Footer -->
<footer class="bg-white shadow-inner py-6 mt-auto text-center">
    <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
</footer>

@livewireScripts
</body>
</html>
