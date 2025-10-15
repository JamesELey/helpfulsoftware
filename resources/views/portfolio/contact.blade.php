@extends('layouts.app')

@section('title', 'Contact Us - HelpfulSoftware | Get Your Project Started')
@section('description', 'Contact HelpfulSoftware for custom software development. Get in touch via our contact form or email sutherlandeley@gmail.com. We respond within 24 hours.')
@section('keywords', 'contact, software development, custom software, web development, technology solutions, get started, consultation')
@section('og_image', asset('images/logo_02.png'))

@section('content')
<style>
    .contact-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    .contact-header {
        text-align: center;
        margin-bottom: 40px;
    }
    .contact-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }
    .contact-subtitle {
        font-size: 1.2rem;
        color: #666;
        margin-bottom: 0;
    }
    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .form-group {
        margin-bottom: 25px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
    }
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 15px;
        border: 2px solid #e1e5e9;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }
    .submit-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.2s ease;
        width: 100%;
    }
    .submit-btn:hover {
        transform: translateY(-2px);
    }
    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
    }
    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        border: 1px solid #f5c6cb;
    }
    .contact-info {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 30px;
        border-radius: 15px;
        margin-top: 30px;
        text-align: center;
    }
    .contact-info h3 {
        color: #333;
        margin-bottom: 15px;
    }
    .contact-info p {
        color: #666;
        margin-bottom: 10px;
    }
    .contact-info a {
        color: #667eea;
        text-decoration: none;
    }
    .contact-info a:hover {
        text-decoration: underline;
    }
</style>

<div class="contact-container">
    <div class="contact-header">
        <h1 class="contact-title">Get In Touch</h1>
        <p class="contact-subtitle">Send us a message through our internal system or email us directly</p>
    </div>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error-message">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
        @csrf
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject *</label>
            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="submit-btn">Send Message</button>
    </form>

    <div class="contact-info">
        <h3>Direct Email Contact</h3>
        <p><strong>Email us directly:</strong> <a href="mailto:sutherlandeley@gmail.com">sutherlandeley@gmail.com</a></p>
        <p>Or use the form above to send us an internal message</p>
        <p>We typically respond within 24 hours</p>
    </div>
</div>
@endsection