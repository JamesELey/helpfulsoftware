@extends('layouts.app')

@section('title', 'Page Not Found - HelpfulSoftware')
@section('description', 'The page you are looking for could not be found. Return to our homepage to explore our portfolio of successful software solutions.')

@section('content')
<style>
    .error-container {
        max-width: 600px;
        margin: 100px auto;
        padding: 40px 20px;
        text-align: center;
    }
    .error-code {
        font-size: 8rem;
        font-weight: bold;
        color: #667eea;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    .error-title {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
    }
    .error-message {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 2rem;
        line-height: 1.6;
    }
    .error-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: transform 0.2s ease;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
    }
    .btn-secondary {
        background: transparent;
        color: #667eea;
        padding: 12px 24px;
        border: 2px solid #667eea;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .btn-secondary:hover {
        background: #667eea;
        color: white;
    }
    .helpful-links {
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid #eee;
    }
    .helpful-links h3 {
        color: #333;
        margin-bottom: 1rem;
    }
    .helpful-links ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 2rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    .helpful-links a {
        color: #667eea;
        text-decoration: none;
        font-weight: 500;
    }
    .helpful-links a:hover {
        text-decoration: underline;
    }
</style>

<div class="error-container">
    <div class="error-code">404</div>
    <h1 class="error-title">Page Not Found</h1>
    <p class="error-message">
        Sorry, the page you are looking for doesn't exist or has been moved. 
        Don't worry though, we have plenty of other great content for you to explore.
    </p>
    
    <div class="error-actions">
        <a href="{{ route('portfolio.index') }}" class="btn-primary">Go Home</a>
        <a href="{{ route('portfolio.contact') }}" class="btn-secondary">Contact Us</a>
    </div>
    
    <div class="helpful-links">
        <h3>Popular Pages</h3>
        <ul>
            <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
            <li><a href="{{ route('portfolio.about') }}">About Us</a></li>
            <li><a href="{{ route('portfolio.contact') }}">Contact</a></li>
        </ul>
    </div>
</div>
@endsection
