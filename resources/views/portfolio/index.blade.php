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
        background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
        color: white;
        text-align: center;
        padding: 60px 20px;
    }
    .hero-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    .hero-logo {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        backdrop-filter: blur(10px);
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
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 25px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    .portfolio-card {
        background: transparent;
        border-radius: 8px;
        padding: 0;
        box-shadow: none;
        text-align: center;
        transition: transform 0.2s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
        text-decoration: none;
        color: inherit;
        width: 120px;
    }
    .portfolio-card:hover {
        transform: scale(1.05);
    }
    .card-image {
        width: 100px;
        height: 100px;
        margin: 0 auto 10px;
        background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 16px rgba(255, 107, 107, 0.3);
        position: relative;
    }
    .card-image::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
        border-radius: 18px;
        z-index: -1;
        opacity: 0.3;
    }
    .card-image img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        background: white;
        border-radius: 8px;
        padding: 6px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .card-title {
        font-weight: 500;
        margin-bottom: 0;
        font-size: 0.9rem;
        color: #1a1a1a;
        text-align: center;
        line-height: 1.2;
        word-wrap: break-word;
        hyphens: auto;
    }
    .card-domain {
        display: none;
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
        <h1 class="hero-title">
            <div class="hero-logo">♥</div>
            HelpfulSoftware Portfolio
        </h1>
    </div>
</div>

<section id="portfolio" class="portfolio-container">
    <div class="portfolio-grid">
        @foreach($brands as $brand)
        <a href="{{ $brand->website_url }}" target="_blank" class="portfolio-card">
            <div class="card-image">
                <img src="{{ $brand->logo }}" alt="{{ $brand->name }}">
            </div>
            <h3 class="card-title">{{ $brand->name }}</h3>
        </a>
        @endforeach
    </div>
</section>
@endsection
