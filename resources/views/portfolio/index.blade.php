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
        <h1 class="hero-title">HelpfulSoftware Portfolio</h1>
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
            <p class="card-domain">{{ parse_url($brand->website_url, PHP_URL_HOST) }}</p>
        </a>
        @endforeach
    </div>
</section>
@endsection
