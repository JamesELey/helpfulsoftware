@extends('layouts.app')

@section('title', 'Contact Us - HelpfulSoftware')
@section('description', 'Get in touch with HelpfulSoftware to discuss your next project and discover how we can help transform your business.')

@section('content')
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .hero {
        background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
        color: white;
        text-align: center;
    }
    .fade-in-up {
        animation: fadeInUp 0.6s ease-out;
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    @media (max-width: 768px) {
        .container {
            padding: 0 15px;
        }
        .container > div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
            gap: 1.5rem !important;
        }
    }
</style>

<section class="hero" style="padding: 1rem 0;">
    <div class="container">
        <h1 class="fade-in-up" style="font-size: 2rem; margin-bottom: 0.5rem;">Let's Work Together</h1>
        <p class="fade-in-up" style="font-size: 1rem; margin-bottom: 0;">Ready to transform your business? Get in touch with our team</p>
    </div>
</section>

<div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 1.5rem 0;">
        <!-- Contact Form -->
        <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem;">
            <h2 style="font-size: 1.8rem; font-weight: 700; color: #1a1a1a; margin-bottom: 1.5rem;">Send us a Message</h2>
            
            <form id="contactForm" style="display: flex; flex-direction: column; gap: 1rem;">
                @csrf
                <div>
                    <label for="name" style="display: block; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Full Name</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 1rem; border: 2px solid #e1e5e9; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;" placeholder="Your full name">
                </div>
                
                <div>
                    <label for="email" style="display: block; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Email Address</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 1rem; border: 2px solid #e1e5e9; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;" placeholder="your@email.com">
                </div>
                
                <div>
                    <label for="company" style="display: block; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Company</label>
                    <input type="text" id="company" name="company" style="width: 100%; padding: 1rem; border: 2px solid #e1e5e9; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;" placeholder="Your company name">
                </div>
                
                <div>
                    <label for="project_type" style="display: block; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Project Type</label>
                    <select id="project_type" name="project_type" style="width: 100%; padding: 1rem; border: 2px solid #e1e5e9; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                        <option value="">Select project type</option>
                        <option value="web-development">Web Development</option>
                        <option value="mobile-app">Mobile App</option>
                        <option value="cloud-solution">Cloud Solution</option>
                        <option value="consulting">Consulting</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div>
                    <label for="message" style="display: block; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Message</label>
                    <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 1rem; border: 2px solid #e1e5e9; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease; resize: vertical;" placeholder="Tell us about your project..."></textarea>
                </div>
                
                <button type="submit" style="background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); color: white; padding: 1rem 2rem; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: transform 0.3s ease;">
                    Send Message
                </button>
            </form>
        </section>

        <!-- Contact Information -->
        <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem;">
            <h2 style="font-size: 1.8rem; font-weight: 700; color: #1a1a1a; margin-bottom: 1.5rem;">Get in Touch</h2>
            
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="{{ asset('images/email_01.png') }}" alt="Email" style="width: 32px; height: 32px;">
                    <div>
                        <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.25rem;">Email</h3>
                        <p style="color: #666;">hello@helpfulsoftware.com</p>
                    </div>
                </div>
                
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="{{ asset('images/phone_01.png') }}" alt="Phone" style="width: 32px; height: 32px;">
                    <div>
                        <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.25rem;">Phone</h3>
                        <p style="color: #666;">+1 (555) 123-4567</p>
                    </div>
                </div>
                
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="{{ asset('images/location_01.png') }}" alt="Location" style="width: 32px; height: 32px;">
                    <div>
                        <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.25rem;">Office</h3>
                        <p style="color: #666;">123 Innovation Drive<br>Tech City, TC 12345</p>
                    </div>
                </div>
                
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="{{ asset('images/hours_01.png') }}" alt="Business Hours" style="width: 32px; height: 32px;">
                    <div>
                        <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.25rem;">Business Hours</h3>
                        <p style="color: #666;">Monday - Friday: 9:00 AM - 6:00 PM<br>Weekend: By appointment</p>
                    </div>
                </div>
            </div>
            
            <!-- Leadership Team -->
            <div style="margin-top: 2rem;">
                <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Leadership Team</h3>
                
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; background: rgba(255, 107, 107, 0.1); border-radius: 12px;">
                        <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #ff6b6b;">
                            <img src="/favicons/profile_picture.jpeg" alt="James Eley" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h4 style="font-size: 1rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.25rem;">James Eley</h4>
                            <p style="font-size: 0.9rem; color: #ff6b6b; font-weight: 500;">CEO / CTO</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; background: rgba(78, 205, 196, 0.1); border-radius: 12px;">
                        <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #4ecdc4;">
                            <img src="/favicons/pp.png" alt="Pete Sutherland" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h4 style="font-size: 1rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.25rem;">Pete Sutherland</h4>
                            <p style="font-size: 0.9rem; color: #4ecdc4; font-weight: 500;">CMO</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div style="margin-top: 2rem;">
                <h3 style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.75rem;">Follow Us</h3>
                <div style="display: flex; gap: 1rem;">
                    <a href="#" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; background: #f8f9fa; border: 2px solid #e1e5e9;">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width: 20px; height: 20px;">
                    </a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; background: #f8f9fa; border: 2px solid #e1e5e9;">
                        <img src="{{ asset('images/twitter_01.png') }}" alt="Twitter" style="width: 20px; height: 20px;">
                    </a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; background: #f8f9fa; border: 2px solid #e1e5e9;">
                        <img src="{{ asset('images/linked_in.png') }}" alt="LinkedIn" style="width: 20px; height: 20px;">
                    </a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; background: #f8f9fa; border: 2px solid #e1e5e9;">
                        <img src="{{ asset('images/github_01.png') }}" alt="GitHub" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@push('styles')
<style>
    input:focus, textarea:focus, select:focus {
        outline: none;
        border-color: #667eea !important;
    }
    
    button:hover {
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .container > div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const button = this.querySelector('button[type="submit"]');
        const originalText = button.textContent;
        
        // Show loading state
        button.innerHTML = '<span class="loading"></span> Sending...';
        button.disabled = true;
        
        // Simulate form submission (replace with actual form handling)
        setTimeout(() => {
            button.textContent = 'Message Sent!';
            button.style.background = '#27ae60';
            
            setTimeout(() => {
                button.textContent = originalText;
                button.style.background = 'linear-gradient(45deg, #667eea, #764ba2)';
                button.disabled = false;
                this.reset();
            }, 2000);
        }, 1500);
    });
</script>
@endpush
