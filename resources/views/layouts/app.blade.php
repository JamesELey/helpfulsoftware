<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'HelpfulSoftware Portfolio')</title>
    <meta name="description" content="@yield('description', 'Professional portfolio showcasing our work with 13+ leading brands. Discover our innovative solutions and proven track record.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: #f8f9fa;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #667eea;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo-icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        .nav-links a {
            color: #1a1a1a;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #667eea;
        }
        .main-content {
            margin-top: 80px;
            min-height: calc(100vh - 80px);
        }
        .footer {
            background: #1a1a1a;
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 4rem;
        }
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('portfolio.index') }}" class="logo">
                <div class="logo-icon">♥</div>
                HelpfulSoftware
            </a>
            <ul class="nav-links">
                <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                <li><a href="{{ route('portfolio.about') }}">About</a></li>
                <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="nav-container">
            <p>&copy; {{ date('Y') }} HelpfulSoftware. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
