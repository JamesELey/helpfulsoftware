@extends('layouts.app')

@section('title', 'About Us - HelpfulSoftware')
@section('description', 'Learn about HelpfulSoftware\'s mission to transform businesses through innovative technology solutions.')

@section('content')
<section class="hero">
    <div class="container">
        <h1 class="fade-in-up">About HelpfulSoftware</h1>
        <p class="fade-in-up">Transforming businesses through innovative technology solutions</p>
    </div>
</section>

<div class="container">
    <!-- Mission Section -->
    <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin: 3rem 0; text-align: center;">
        <h2 style="font-size: 2.5rem; font-weight: 700; color: #1a1a1a; margin-bottom: 1.5rem;">Our Mission</h2>
        <p style="font-size: 1.2rem; color: #666; line-height: 1.6; max-width: 800px; margin: 0 auto;">
            We specialize in creating custom web solutions for diverse industries including pet services, 
            art portfolios, wellness platforms, and environmental services. Our 13+ live projects demonstrate 
            our ability to deliver functional, scalable solutions that drive real business results.
        </p>
    </section>

    <!-- Leadership Team Section -->
    <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin: 3rem 0;">
        <h2 style="font-size: 2.5rem; font-weight: 700; color: #1a1a1a; margin-bottom: 2rem; text-align: center;">Leadership Team</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
            <!-- James Eley -->
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white;">
                <div style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 1.5rem; overflow: hidden; border: 4px solid rgba(255, 255, 255, 0.3);">
                    <img src="/favicons/profile_picture.jpeg" alt="James Eley" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem;">James Eley</h3>
                <div style="font-size: 1.2rem; font-weight: 500; margin-bottom: 1rem; opacity: 0.9;">CEO / CTO</div>
                <p style="font-size: 1rem; line-height: 1.5; opacity: 0.8;">
                    Visionary leader driving technical innovation and strategic direction. 
                    Expert in full-stack development and scalable architecture solutions.
                </p>
            </div>

            <!-- Pete Sutherland -->
            <div style="background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white;">
                <div style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 1.5rem; overflow: hidden; border: 4px solid rgba(255, 255, 255, 0.3);">
                    <img src="/favicons/pp.png" alt="Pete Sutherland" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem;">Pete Sutherland</h3>
                <div style="font-size: 1.2rem; font-weight: 500; margin-bottom: 1rem; opacity: 0.9;">CMO</div>
                <p style="font-size: 1rem; line-height: 1.5; opacity: 0.8;">
                    Marketing strategist focused on brand growth and client acquisition. 
                    Specializes in digital marketing and business development initiatives.
                </p>
            </div>
        </div>
    </section>

    <!-- Values Grid -->
    <section style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 3rem 0;">
        <div style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; text-align: center;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">🚀</div>
            <h3 style="font-size: 1.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Innovation</h3>
            <p style="color: #666; line-height: 1.6;">We stay at the forefront of technology, implementing cutting-edge solutions that give our clients a competitive edge.</p>
        </div>
        
        <div style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; text-align: center;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">🎯</div>
            <h3 style="font-size: 1.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Results-Driven</h3>
            <p style="color: #666; line-height: 1.6;">Every project is measured against clear KPIs and business objectives to ensure maximum ROI for our clients.</p>
        </div>
        
        <div style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2rem; text-align: center;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">🤝</div>
            <h3 style="font-size: 1.5rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem;">Partnership</h3>
            <p style="color: #666; line-height: 1.6;">We work as an extension of your team, building long-term relationships based on trust and mutual success.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin: 3rem 0;">
        <h2 style="font-size: 2.5rem; font-weight: 700; color: #1a1a1a; text-align: center; margin-bottom: 2rem;">Our Expertise</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">💻</div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Web Development</h3>
                <p style="color: #666;">Custom web applications and platforms</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">📱</div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Mobile Apps</h3>
                <p style="color: #666;">iOS and Android applications</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">☁️</div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Cloud Solutions</h3>
                <p style="color: #666;">Scalable cloud infrastructure</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🔧</div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">DevOps</h3>
                <p style="color: #666;">Automation and deployment</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; padding: 3rem; margin: 3rem 0; text-align: center; color: white;">
        <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Ready to Transform Your Business?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">Let's discuss how we can help you achieve your digital goals</p>
        <a href="{{ route('portfolio.contact') }}" style="display: inline-block; background: white; color: #667eea; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: transform 0.3s ease;">Get Started Today</a>
    </section>
</div>
@endsection
