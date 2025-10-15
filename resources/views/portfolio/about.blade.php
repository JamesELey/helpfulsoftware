@extends('layouts.app')

@section('title', 'About Us - HelpfulSoftware | Transforming Businesses Through Technology')
@section('description', 'Learn about HelpfulSoftware\'s mission to transform businesses through innovative technology solutions. Discover our expertise in custom software development and digital transformation.')
@section('keywords', 'about, software development company, technology solutions, digital transformation, custom software, business innovation, team expertise')
@section('og_image', asset('images/logo_02.png'))

@section('content')
<section class="hero" style="background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); padding: 2rem 0; text-align: center;">
    <div class="container">
        <h1 class="fade-in-up" style="font-size: 2rem; font-weight: 400; color: white; opacity: 0.9; margin-bottom: 0.5rem;">About HelpfulSoftware</h1>
        <p class="fade-in-up" style="font-size: 1rem; color: white; opacity: 0.8;">Transforming businesses through innovative technology solutions</p>
    </div>
</section>

<div class="container">
    <!-- Mission Section -->
    <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin: 3rem 0; text-align: center;">
        <img src="{{ asset('images/our_mission_01.png') }}" alt="Our Mission" style="max-width: 400px; height: auto; margin-bottom: 2rem;" loading="lazy" width="400" height="300">
        <p style="font-size: 1.2rem; color: #666; line-height: 1.6; max-width: 800px; margin: 0 auto;">
            We specialize in creating custom web solutions for diverse industries including pet services, 
            art portfolios, wellness platforms, and environmental services. Our 13+ projects (including 9+ active websites) demonstrate 
            our ability to deliver functional, scalable solutions that drive real business results.
        </p>
    </section>

    <!-- Leadership Team Section -->
    <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin: 3rem 0;">
        <div style="text-align: center; margin-bottom: 2rem;">
            <img src="{{ asset('images/leader_01.png') }}" alt="Leadership Team" style="max-width: 400px; height: auto;">
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
            <!-- James Eley -->
            <div style="background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white;">
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
            <div style="background: linear-gradient(135deg, #4ecdc4 0%, #ff6b6b 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white;">
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
        <div style="background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white; box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);">
            <div style="width: 100px; height: 100px; background: rgba(255, 255, 255, 0.25); border-radius: 12px; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255, 255, 255, 0.3);">
                <img src="{{ asset('images/innovation.png') }}" alt="Innovation" style="width: 64px; height: 64px; object-fit: contain;">
            </div>
            <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 1rem;">Innovation</h3>
            <p style="opacity: 0.95; line-height: 1.6; font-size: 1rem;">We stay at the forefront of technology, implementing cutting-edge solutions that give our clients a competitive edge.</p>
        </div>
        
        <div style="background: linear-gradient(135deg, #4ecdc4 0%, #ff6b6b 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white; box-shadow: 0 10px 30px rgba(78, 205, 196, 0.3);">
            <div style="width: 100px; height: 100px; background: rgba(255, 255, 255, 0.25); border-radius: 12px; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255, 255, 255, 0.3);">
                <img src="{{ asset('images/target.png') }}" alt="Results-Driven" style="width: 64px; height: 64px; object-fit: contain;">
            </div>
            <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 1rem;">Results-Driven</h3>
            <p style="opacity: 0.95; line-height: 1.6; font-size: 1rem;">Every project is measured against clear KPIs and business objectives to ensure maximum ROI for our clients.</p>
        </div>
        
        <div style="background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); border-radius: 20px; padding: 2rem; text-align: center; color: white; box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);">
            <div style="width: 100px; height: 100px; background: rgba(255, 255, 255, 0.25); border-radius: 12px; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255, 255, 255, 0.3);">
                <img src="{{ asset('images/partner.png') }}" alt="Partnership" style="width: 64px; height: 64px; object-fit: contain;">
            </div>
            <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 1rem;">Partnership</h3>
            <p style="opacity: 0.95; line-height: 1.6; font-size: 1rem;">We work as an extension of your team, building long-term relationships based on trust and mutual success.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; margin: 3rem 0;">
        <h2 style="font-size: 2.5rem; font-weight: 700; color: #2F7C7C; text-align: center; margin-bottom: 2rem;">Our Expertise</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); border-radius: 8px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/desktop.png') }}" alt="Web Development" style="width: 32px; height: 32px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Web Development</h3>
                <p style="color: #666;">Custom web applications and platforms</p>
            </div>
            
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4ecdc4 0%, #ff6b6b 100%); border-radius: 8px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/mobile.png') }}" alt="Mobile Apps" style="width: 32px; height: 32px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Mobile Apps</h3>
                <p style="color: #666;">iOS and Android applications</p>
            </div>
            
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); border-radius: 8px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/cloud.png') }}" alt="Cloud Solutions" style="width: 32px; height: 32px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">Cloud Solutions</h3>
                <p style="color: #666;">Scalable cloud infrastructure</p>
            </div>
            
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4ecdc4 0%, #ff6b6b 100%); border-radius: 8px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/dev_ops.png') }}" alt="DevOps" style="width: 32px; height: 32px; object-fit: contain;">
                </div>
                <h3 style="font-size: 1.3rem; font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem;">DevOps</h3>
                <p style="color: #666;">Automation and deployment</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%); border-radius: 20px; padding: 3rem; margin: 3rem 0; text-align: center; color: white;">
        <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Ready to Transform Your Business?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">Let's discuss how we can help you achieve your digital goals</p>
        <a href="{{ route('portfolio.contact') }}" style="display: inline-block; background: white; color: #ff6b6b; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: transform 0.3s ease;">Get Started Today</a>
    </section>
</div>
@endsection
