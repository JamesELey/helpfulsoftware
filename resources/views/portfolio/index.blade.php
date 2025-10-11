@extends('layouts.app')

@section('title', 'Portfolio - HelpfulSoftware')
@section('description', 'Explore our portfolio of successful brand partnerships and innovative solutions that drive business growth.')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Real Projects, Real Results</h1>
        <p class="text-xl mb-6">Discover our portfolio of 13+ projects delivering exceptional value</p>
        <a href="#portfolio" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">Explore Our Work</a>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white shadow-lg mx-4 -mt-8 relative z-10 rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6">
        <div class="text-center">
            <div class="text-3xl font-bold text-blue-500 mb-1">13+</div>
            <div class="text-sm text-gray-600">Active Projects</div>
        </div>
        <div class="text-center">
            <div class="text-3xl font-bold text-purple-500 mb-1">8+</div>
            <div class="text-sm text-gray-600">Industries</div>
        </div>
        <div class="text-center">
            <div class="text-3xl font-bold text-green-500 mb-1">100%</div>
            <div class="text-sm text-gray-600">Success Rate</div>
        </div>
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
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-3 bg-gray-100 rounded-lg flex items-center justify-center">
                        <img src="{{ $brand->logo }}" alt="{{ $brand->name }}" style="width: 48px; height: 48px; object-fit: contain;" class="max-w-full max-h-full">
                    </div>
                    <h3 class="font-bold text-sm mb-1">{{ $brand->name }}</h3>
                    <p class="text-xs text-gray-600 mb-2">{{ parse_url($brand->website_url, PHP_URL_HOST) }}</p>
                    <a href="{{ $brand->website_url }}" target="_blank" class="inline-block bg-blue-500 text-white text-xs px-3 py-1 rounded hover:bg-blue-600 transition-colors">
                        Visit Site
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold mb-3">Ready to Work Together?</h2>
        <p class="mb-4">Let's create something amazing for your business</p>
        <a href="{{ route('portfolio.contact') }}" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">Get Started</a>
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
