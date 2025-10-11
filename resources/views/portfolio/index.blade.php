@extends('layouts.app')

@section('title', 'Portfolio - HelpfulSoftware')
@section('description', 'Explore our portfolio of successful brand partnerships and innovative solutions that drive business growth.')

@section('content')
<!-- Hero Section -->
<div class="hero bg-gradient-to-br from-primary via-secondary to-accent py-20">
    <div class="hero-content text-center text-neutral-content">
        <div class="max-w-2xl">
            <h1 class="mb-5 text-4xl lg:text-5xl font-bold">Real Projects, Real Results</h1>
            <p class="mb-5 text-lg lg:text-xl">Discover our portfolio of 13+ projects delivering exceptional value across diverse industries</p>
            <a href="#portfolio" class="btn btn-primary btn-lg">Explore Our Work</a>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="stats stats-vertical lg:stats-horizontal shadow-xl bg-base-100 mx-4 -mt-10 relative z-10">
    <div class="stat">
        <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <div class="stat-title">Active Projects</div>
        <div class="stat-value text-primary">13+</div>
        <div class="stat-desc">Live websites & platforms</div>
    </div>
    
    <div class="stat">
        <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
            </svg>
        </div>
        <div class="stat-title">Industries</div>
        <div class="stat-value text-secondary">8+</div>
        <div class="stat-desc">Diverse sectors served</div>
    </div>
    
    <div class="stat">
        <div class="stat-figure text-accent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
            </svg>
        </div>
        <div class="stat-title">Success Rate</div>
        <div class="stat-value text-accent">100%</div>
        <div class="stat-desc">Client satisfaction</div>
    </div>
</div>

<!-- Portfolio Grid -->
<section id="portfolio" class="py-12 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-base-content mb-2">Our Portfolio</h2>
            <p class="text-lg text-base-content/70 max-w-xl mx-auto">Explore our diverse range of successful projects</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @foreach($brands as $index => $brand)
            <div class="card portfolio-card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                <figure class="px-4 pt-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center shadow-md group-hover:scale-105 transition-transform duration-300 overflow-hidden">
                        <img src="{{ $brand->logo }}" alt="{{ $brand->name }}" class="w-12 h-12 object-contain rounded-lg bg-white p-1.5 shadow-sm max-w-full max-h-full">
                    </div>
                </figure>
                <div class="card-body items-center text-center p-4">
                    <h2 class="card-title text-sm font-bold text-base-content mb-1">{{ $brand->name }}</h2>
                    <p class="text-xs text-base-content/60 font-mono mb-2">{{ parse_url($brand->website_url, PHP_URL_HOST) }}</p>
                    <div class="card-actions">
                        <a href="{{ $brand->website_url }}" target="_blank" class="btn btn-primary btn-xs">
                            Visit
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<div class="hero bg-gradient-to-r from-primary to-secondary text-primary-content py-12">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="mb-3 text-2xl font-bold">Ready to Work Together?</h1>
            <p class="mb-4">Let's create something amazing for your business</p>
            <a href="{{ route('portfolio.contact') }}" class="btn btn-accent">Get Started</a>
        </div>
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
