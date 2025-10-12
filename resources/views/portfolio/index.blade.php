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
        padding: 40px 20px;
        position: relative;
        overflow: hidden;
    }
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at center, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }
    .hero-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .hero-logo {
        height: 280px;
        width: auto;
        object-fit: contain;
        margin-bottom: 20px;
        filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.3));
        animation: logoGlow 3s ease-in-out infinite alternate;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.05) 70%, transparent 100%);
        border-radius: 50px;
        padding: 40px;
        backdrop-filter: blur(5px);
        border: none;
        position: relative;
    }
    .hero-logo::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
        border-radius: 60px;
        z-index: -1;
        animation: pixelDust 4s ease-in-out infinite alternate;
    }
    @keyframes pixelDust {
        from {
            opacity: 0.3;
            transform: scale(0.95);
        }
        to {
            opacity: 0.6;
            transform: scale(1.05);
        }
    }
    @keyframes logoGlow {
        from {
            filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.3)) drop-shadow(0 0 20px rgba(255, 255, 255, 0.2));
        }
        to {
            filter: drop-shadow(0 15px 35px rgba(0, 0, 0, 0.4)) drop-shadow(0 0 30px rgba(255, 255, 255, 0.4));
        }
    }
    .hero-title {
        font-size: 1.2rem;
        font-weight: 400;
        margin-bottom: 0;
        opacity: 0.9;
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
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        max-width: 1600px;
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
        width: 170px;
    }
    .portfolio-card:hover {
        transform: scale(1.05);
    }
    .card-image {
        width: 150px;
        height: 150px;
        margin: 0 auto 15px;
        background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
        position: relative;
    }
    .card-image::before {
        content: '';
        position: absolute;
        top: -4px;
        left: -4px;
        right: -4px;
        bottom: -4px;
        background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
        border-radius: 28px;
        z-index: -1;
        opacity: 0.3;
    }
    .card-image img {
        width: 130px;
        height: 130px;
        object-fit: contain;
        background: white;
        border-radius: 12px;
        padding: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
        <div class="hero-content">
            <img src="{{ asset('images/logo_02.png') }}" alt="HelpfulSoftware" class="hero-logo">
            <h1 class="hero-title">Software that helps</h1>
        </div>
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
