<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'HelpfulSoftware Portfolio')</title>
    <meta name="description" content="@yield('description', 'Professional portfolio showcasing our work with 14+ leading brands. Discover our innovative solutions and proven track record.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #667eea;
            text-decoration: none;
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
        
        /* Main Content */
        .main {
            margin-top: 80px;
            min-height: calc(100vh - 80px);
        }
        
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 4rem 0;
            color: white;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        }
        
        /* Portfolio Grid */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 4rem 0;
        }
        
        .brand-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .brand-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }
        
        .brand-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .brand-card:hover .brand-image {
            transform: scale(1.05);
        }
        
        .brand-content {
            padding: 1.5rem;
        }
        
        .brand-name {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }
        
        .brand-industry {
            color: #667eea;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }
        
        .brand-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        /* Stats Section */
        .stats-section {
            background: rgba(255, 255, 255, 0.95);
            margin: 4rem 0;
            padding: 4rem 0;
            border-radius: 20px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }
        
        .stat-item {
            padding: 1rem;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: #666;
            font-weight: 500;
        }
        
        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 4rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .portfolio-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        
        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <a href="{{ route('portfolio.index') }}" class="logo">HelpfulSoftware</a>
            <ul class="nav-links">
                <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                <li><a href="{{ route('portfolio.about') }}">About</a></li>
                <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} HelpfulSoftware. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
