<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="portfolio">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'HelpfulSoftware Portfolio')</title>
    <meta name="description" content="@yield('description', 'Professional portfolio showcasing our work with 13+ leading brands. Discover our innovative solutions and proven track record.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="min-h-screen bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10">
    <!-- Navigation -->
    <div class="navbar bg-base-100/95 backdrop-blur-md shadow-lg fixed top-0 z-50">
        <div class="navbar-start">
            <a href="{{ route('portfolio.index') }}" class="btn btn-ghost text-xl font-bold text-primary">
                HelpfulSoftware
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('portfolio.index') }}" class="btn btn-ghost">Portfolio</a></li>
                <li><a href="{{ route('portfolio.about') }}" class="btn btn-ghost">About</a></li>
                <li><a href="{{ route('portfolio.contact') }}" class="btn btn-ghost">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                    <li><a href="{{ route('portfolio.about') }}">About</a></li>
                    <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded-t-3xl mt-20">
        <aside>
            <p class="font-bold text-lg">HelpfulSoftware</p>
            <p class="text-base-content/70">Transforming businesses through innovative technology solutions</p>
            <p>&copy; {{ date('Y') }} HelpfulSoftware. All rights reserved.</p>
        </aside>
    </footer>

    @stack('scripts')
</body>
</html>
