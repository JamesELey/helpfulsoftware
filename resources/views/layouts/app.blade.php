<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'HelpfulSoftware Portfolio')</title>
    <meta name="description" content="@yield('description', 'Professional portfolio showcasing our work with 13+ leading brands. Discover our innovative solutions and proven track record.')">
    <meta name="keywords" content="@yield('keywords', 'software development, web development, portfolio, technology solutions, brand partnerships, custom software, Laravel, PHP, web applications')">
    <meta name="author" content="HelpfulSoftware">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'HelpfulSoftware Portfolio')">
    <meta property="og:description" content="@yield('description', 'Professional portfolio showcasing our work with 13+ leading brands. Discover our innovative solutions and proven track record.')">
    <meta property="og:image" content="@yield('og_image', asset('images/logo_02.png'))">
    <meta property="og:site_name" content="HelpfulSoftware">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'HelpfulSoftware Portfolio')">
    <meta property="twitter:description" content="@yield('description', 'Professional portfolio showcasing our work with 13+ leading brands. Discover our innovative solutions and proven track record.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/logo_02.png'))">
    <meta property="twitter:creator" content="@helpfulsoftware">
    <meta property="twitter:site" content="@helpfulsoftware">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#2F7C7C">
    <meta name="msapplication-TileColor" content="#2F7C7C">
    <meta name="application-name" content="HelpfulSoftware">
    <meta name="apple-mobile-web-app-title" content="HelpfulSoftware">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('images/logo_02.png') }}" as="image">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    
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
            color: #2F7C7C;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo img {
            height: 40px;
            width: auto;
            object-fit: contain;
        }
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        .nav-links a {
            color: #2F7C7C;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .nav-links a:hover {
            color: #F78070;
        }
        .nav-links a:hover::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: linear-gradient(180deg, 
                transparent 0%, 
                rgba(255, 107, 107, 0.1) 20%, 
                rgba(78, 205, 196, 0.1) 40%, 
                rgba(255, 107, 107, 0.1) 60%, 
                rgba(78, 205, 196, 0.1) 80%, 
                transparent 100%);
            background-size: 4px 4px;
            animation: pixelDust 1.5s ease-out forwards;
            pointer-events: none;
        }
        @keyframes pixelDust {
            0% { 
                transform: translateY(-100%); 
                opacity: 0;
            }
            20% { 
                opacity: 1;
            }
            100% { 
                transform: translateY(100%); 
                opacity: 0;
            }
        }
        .cta-button {
            background: #F78070;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        .cta-button:hover {
            background: #e66b5a;
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
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "HelpfulSoftware",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo_02.png') }}",
        "description": "Professional software development company specializing in custom web applications and technology solutions for businesses.",
        "foundingDate": "2020",
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "email": "sutherlandeley@gmail.com"
        },
        "sameAs": [
            "https://github.com/JamesELey/helpfulsoftware",
            "https://linkedin.com/company/helpfulsoftware"
        ],
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        }
    }
    </script>
    
    @yield('structured_data')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('portfolio.index') }}" class="logo">
                <img src="{{ asset('images/hs_nav_01.png') }}" alt="HelpfulSoftware">
            </a>
            <ul class="nav-links">
                <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                <li><a href="{{ route('portfolio.about') }}">About</a></li>
                <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
            </ul>
            <a href="{{ route('portfolio.contact') }}" class="cta-button">Get Started</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="nav-container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <div>
                    <h3 style="color: white; margin-bottom: 1rem; font-size: 1.2rem;">Quick Links</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 0.5rem;"><a href="{{ route('portfolio.index') }}" style="color: #ccc; text-decoration: none;">Portfolio</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="{{ route('portfolio.about') }}" style="color: #ccc; text-decoration: none;">About Us</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="{{ route('portfolio.contact') }}" style="color: #ccc; text-decoration: none;">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 style="color: white; margin-bottom: 1rem; font-size: 1.2rem;">Services</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 0.5rem;"><span style="color: #ccc;">Web Development</span></li>
                        <li style="margin-bottom: 0.5rem;"><span style="color: #ccc;">Mobile Apps</span></li>
                        <li style="margin-bottom: 0.5rem;"><span style="color: #ccc;">Cloud Solutions</span></li>
                        <li style="margin-bottom: 0.5rem;"><span style="color: #ccc;">DevOps</span></li>
                    </ul>
                </div>
                <div>
                    <h3 style="color: white; margin-bottom: 1rem; font-size: 1.2rem;">Contact Info</h3>
                    <p style="color: #ccc; margin-bottom: 0.5rem;">Email: <a href="mailto:sutherlandeley@gmail.com" style="color: #4ecdc4;">sutherlandeley@gmail.com</a></p>
                    <p style="color: #ccc; margin-bottom: 0.5rem;">Location: United Kingdom</p>
                </div>
            </div>
            <div style="border-top: 1px solid #444; padding-top: 1rem; text-align: center;">
                <p style="color: #ccc; margin: 0;">&copy; {{ date('Y') }} HelpfulSoftware. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
