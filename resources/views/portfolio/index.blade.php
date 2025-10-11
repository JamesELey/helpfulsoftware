@extends('layouts.app')

@section('title', 'Portfolio - HelpfulSoftware')
@section('description', 'Explore our portfolio of successful brand partnerships and innovative solutions that drive business growth.')

@section('content')
<style>
    .portfolio-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .hero-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
        padding: 60px 20px;
    }
    .hero-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 30px;
        opacity: 0.9;
    }
    .cta-button {
        background: white;
        color: #667eea;
        padding: 12px 24px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
    }
    .stats-section {
        background: white;
        margin: -30px 20px 40px;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .stat-item {
        text-align: center;
        margin: 10px;
    }
    .stat-number {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .stat-label {
        font-size: 0.9rem;
        color: #666;
    }
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        max-width: 1400px;
        margin: 0 auto;
    }
    .portfolio-card {
        background: white;
        border-radius: 16px;
        padding: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 300px;
        cursor: pointer;
        text-decoration: none;
        color: inherit;
    }
    .portfolio-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.2);
    }
    .card-image {
        width: 180px;
        height: 180px;
        margin: 0 auto 15px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        position: relative;
    }
    .card-image::before {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        right: -3px;
        bottom: -3px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 27px;
        z-index: -1;
        opacity: 0.4;
    }
    .card-image img {
        width: 160px;
        height: 160px;
        object-fit: contain;
        background: white;
        border-radius: 12px;
        padding: 6px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    .card-title {
        font-weight: bold;
        margin-bottom: 10px;
        font-size: 1.3rem;
        color: #1a1a1a;
    }
    .card-domain {
        font-size: 1rem;
        color: #666;
        margin-bottom: 0;
        font-family: monospace;
        font-weight: 500;
    }
    .cta-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
        padding: 60px 20px;
        margin-top: 60px;
    }
    .cta-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 15px;
    }
    .cta-text {
        font-size: 1.1rem;
        margin-bottom: 30px;
    }
</style>

<div class="hero-section">
    <div class="portfolio-container">
        <h1 class="hero-title">Real Projects, Real Results</h1>
        <p class="hero-subtitle">Discover our portfolio of 13+ projects delivering exceptional value</p>
        <a href="#portfolio" class="cta-button">Explore Our Work</a>
    </div>
</div>

<div class="stats-section">
    <div class="stat-item">
        <div class="stat-number" style="color: #667eea;">13+</div>
        <div class="stat-label">Active Projects</div>
    </div>
    <div class="stat-item">
        <div class="stat-number" style="color: #764ba2;">8+</div>
        <div class="stat-label">Industries</div>
    </div>
    <div class="stat-item">
        <div class="stat-number" style="color: #28a745;">100%</div>
        <div class="stat-label">Success Rate</div>
    </div>
</div>

<section id="portfolio" class="portfolio-container">
    <h2 style="text-align: center; font-size: 2rem; margin-bottom: 40px;">Our Portfolio</h2>
    
    <div class="portfolio-grid">
        @foreach($brands as $brand)
        <a href="{{ $brand->website_url }}" target="_blank" class="portfolio-card">
            <div class="card-image">
                <img src="{{ $brand->logo }}" alt="{{ $brand->name }}">
            </div>
            <h3 class="card-title">{{ $brand->name }}</h3>
            <p class="card-domain">{{ parse_url($brand->website_url, PHP_URL_HOST) }}</p>
        </a>
        @endforeach
    </div>
</section>

<div class="cta-section">
    <div class="portfolio-container">
        <h2 class="cta-title">Ready to Work Together?</h2>
        <p class="cta-text">Let's create something amazing for your business</p>
        <a href="{{ route('portfolio.contact') }}" class="cta-button">Get Started</a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all fade-in-up elements
    document.querySelectorAll('.fade-in-up').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });

    // Add loading states for images
    document.querySelectorAll('.brand-image').forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        img.addEventListener('error', function() {
            this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzUwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDM1MCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzNTAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNzUgMTI1TDE1MCAxMDBIMjAwTDE3NSAxMjVaIiBmaWxsPSIjOUNBM0FGIi8+Cjx0ZXh0IHg9IjE3NSIgeT0iMTQwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNkI3MjgwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkltYWdlIG5vdCBhdmFpbGFibGU8L3RleHQ+Cjwvc3ZnPgo=';
        });
    });
</script>
@endpush
