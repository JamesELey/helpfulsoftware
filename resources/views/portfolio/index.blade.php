@extends('layouts.app')

@section('title', 'Portfolio - HelpfulSoftware')
@section('description', 'Explore our portfolio of successful brand partnerships and innovative solutions that drive business growth.')

@section('content')
<!-- Floating Particles Background -->
<div class="particles-container">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</div>

<section class="hero">
    <div class="container">
        <h1 class="fade-in-up">Real Projects, Real Results</h1>
        <p class="fade-in-up">Discover our portfolio of 13+ projects delivering exceptional value across diverse industries</p>
        <a href="#portfolio" class="cta-button fade-in-up">Explore Our Work</a>
    </div>
</section>

    <section id="portfolio" class="portfolio-grid container">
        @foreach($brands as $brand)
        <a href="{{ $brand->website_url }}" target="_blank" class="brand-card-link">
            <div class="brand-card fade-in-up">
                <div class="brand-image-container">
                    <img src="{{ $brand->logo }}" alt="{{ $brand->name }}" class="brand-image" loading="lazy">
                </div>
                <div class="brand-footer">
                    <div class="brand-name">{{ $brand->name }}</div>
                    <div class="website-domain">{{ parse_url($brand->website_url, PHP_URL_HOST) }}</div>
                </div>
            </div>
        </a>
        @endforeach
    </section>

<section class="stats-section container">
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-number">{{ $brands->count() }}+</div>
            <div class="stat-label">Real Projects Delivered</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">100%</div>
            <div class="stat-label">Client Satisfaction</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">9</div>
            <div class="stat-label">Active Websites</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Support Available</div>
        </div>
    </div>
</section>
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
