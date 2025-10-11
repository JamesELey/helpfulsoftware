@extends('layouts.app')

@section('title', $brand->name . ' - Portfolio Case Study')
@section('description', $brand->description)

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav style="padding: 2rem 0 1rem 0;">
        <a href="{{ route('portfolio.index') }}" style="color: white; text-decoration: none;">← Back to Portfolio</a>
    </nav>

    <!-- Brand Hero Section -->
    <section class="brand-hero" style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin-bottom: 3rem; text-align: center;">
        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 1.5rem; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                <img src="{{ $brand->logo }}" alt="{{ $brand->name }}" style="width: 64px; height: 64px; border-radius: 12px; background: white; padding: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); object-fit: contain;">
                <div style="color: white; font-size: 0.9rem; font-weight: 500; margin-top: 0.8rem; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);">{{ parse_url($brand->website_url, PHP_URL_HOST) }}</div>
            </div>
        </div>
        
        <h1 style="font-size: 2.5rem; font-weight: 700; color: #1a1a1a; margin-bottom: 1rem;">{{ $brand->name }}</h1>
        <div style="color: #667eea; font-size: 1.1rem; font-weight: 500; margin-bottom: 2rem;">{{ $brand->industry }}</div>
        
        @if($brand->website_url)
        <a href="{{ $brand->website_url }}" target="_blank" style="display: inline-block; background: linear-gradient(45deg, #667eea, #764ba2); color: white; padding: 0.75rem 1.5rem; border-radius: 25px; text-decoration: none; font-weight: 600; margin-bottom: 2rem;">Visit Website</a>
        @endif
    </section>

    <!-- Main Content Grid -->
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 3rem; margin-bottom: 3rem;">
        <!-- Left Column - Main Content -->
        <div>
            <!-- Project Overview -->
            <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; margin-bottom: 2rem;">
                <h2 style="font-size: 1.8rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Project Overview</h2>
                <p style="color: #666; line-height: 1.6; font-size: 1.05rem;">{{ $brand->description }}</p>
            </section>

            <!-- Challenges & Solutions -->
            @if($brand->challenges || $brand->solutions)
            <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; margin-bottom: 2rem;">
                <h2 style="font-size: 1.8rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1.5rem;">Challenges & Solutions</h2>
                
                @if($brand->challenges)
                <div style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; color: #e74c3c; margin-bottom: 0.5rem;">Challenges</h3>
                    <p style="color: #666; line-height: 1.6;">{{ $brand->challenges }}</p>
                </div>
                @endif

                @if($brand->solutions)
                <div>
                    <h3 style="font-size: 1.2rem; font-weight: 600; color: #27ae60; margin-bottom: 0.5rem;">Our Solutions</h3>
                    <p style="color: #666; line-height: 1.6;">{{ $brand->solutions }}</p>
                </div>
                @endif
            </section>
            @endif

            <!-- Results -->
            @if($brand->results)
            <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem;">
                <h2 style="font-size: 1.8rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Results</h2>
                <p style="color: #666; line-height: 1.6; font-size: 1.05rem;">{{ $brand->results }}</p>
            </section>
            @endif
        </div>

        <!-- Right Column - Sidebar -->
        <div>
            <!-- Metrics -->
            @if($brand->metrics)
            <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; margin-bottom: 2rem;">
                <h3 style="font-size: 1.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1.5rem;">Key Metrics</h3>
                @foreach($brand->metrics as $metric => $value)
                <div style="margin-bottom: 1rem; padding: 1rem; background: #f8f9fa; border-radius: 10px;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: #667eea;">{{ $value }}</div>
                    <div style="color: #666; font-size: 0.9rem;">{{ $metric }}</div>
                </div>
                @endforeach
            </section>
            @endif

            <!-- Technologies -->
            @if($brand->technologies)
            <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; margin-bottom: 2rem;">
                <h3 style="font-size: 1.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1.5rem;">Technologies Used</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                    @foreach($brand->technologies as $tech)
                    <span style="background: linear-gradient(45deg, #667eea, #764ba2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.85rem; font-weight: 500;">{{ $tech }}</span>
                    @endforeach
                </div>
            </section>
            @endif

            <!-- Testimonial -->
            @if($brand->testimonial)
            <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem;">
                <h3 style="font-size: 1.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Client Testimonial</h3>
                <blockquote style="font-style: italic; color: #666; line-height: 1.6; margin-bottom: 1rem; font-size: 1.05rem;">"{{ $brand->testimonial }}"</blockquote>
                <div style="font-weight: 600; color: #1a1a1a;">{{ $brand->testimonial_author }}</div>
                @if($brand->testimonial_position)
                <div style="color: #667eea; font-size: 0.9rem;">{{ $brand->testimonial_position }}</div>
                @endif
            </section>
            @endif
        </div>
    </div>

    <!-- Related Brands -->
    @if($relatedBrands->count() > 0)
    <section style="margin-bottom: 3rem;">
        <h2 style="font-size: 2rem; font-weight: 600; color: white; text-align: center; margin-bottom: 2rem;">More Success Stories</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @foreach($relatedBrands as $relatedBrand)
            <div style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onclick="window.location.href='{{ route('portfolio.show', $relatedBrand) }}'">
                <img src="{{ $relatedBrand->screenshot }}" alt="{{ $relatedBrand->name }}" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">{{ $relatedBrand->name }}</h3>
                    <div style="color: #667eea; font-size: 0.9rem; font-weight: 500; margin-bottom: 0.5rem;">{{ $relatedBrand->industry }}</div>
                    <p style="color: #666; font-size: 0.9rem; line-height: 1.4;">{{ $relatedBrand->short_description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif
</div>
@endsection

@push('styles')
<style>
    .brand-hero:hover img {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }
    
    @media (max-width: 768px) {
        .container > div[style*="grid-template-columns: 2fr 1fr"] {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }
    }
</style>
@endpush
