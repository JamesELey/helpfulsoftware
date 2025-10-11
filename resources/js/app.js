// Portfolio JavaScript Enhancements
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for all anchor links
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
                entry.target.classList.add('animate-in');
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all elements with fade-in-up class
    document.querySelectorAll('.fade-in-up').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });

    // Enhanced image loading with skeleton effect
    document.querySelectorAll('.brand-image').forEach(img => {
        // Add skeleton class initially
        img.classList.add('skeleton');
        
        img.addEventListener('load', function() {
            this.classList.remove('skeleton');
            this.style.opacity = '1';
        });
        
        img.addEventListener('error', function() {
            this.classList.remove('skeleton');
            this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzUwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDM1MCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzNTAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNzUgMTI1TDE1MCAxMDBIMjAwTDE3NSAxMjVaIiBmaWxsPSIjOUNBM0FGIi8+Cjx0ZXh0IHg9IjE3NSIgeT0iMTQwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNkI3MjgwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkltYWdlIG5vdCBhdmFpbGFibGU8L3RleHQ+Cjwvc3ZnPgo=';
        });
    });

    // Add floating animation to hero elements
    setTimeout(() => {
        document.querySelectorAll('.hero h1, .hero p, .hero .cta-button').forEach((el, index) => {
            el.style.animationDelay = `${index * 0.2}s`;
        });
    }, 100);

    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero');
        if (hero) {
            hero.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });

    // Add hover effects to brand cards
    document.querySelectorAll('.brand-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-15px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Add click tracking for analytics
    document.querySelectorAll('.brand-card').forEach(card => {
        card.addEventListener('click', function() {
            const brandName = this.querySelector('.brand-name').textContent;
            console.log(`Brand clicked: ${brandName}`);
            // Add your analytics tracking here
        });
    });

    // Smooth reveal animation for stats
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumbers = entry.target.querySelectorAll('.stat-number');
                statNumbers.forEach(stat => {
                    const finalValue = stat.textContent;
                    const numericValue = parseInt(finalValue.replace(/\D/g, ''));
                    
                    if (numericValue) {
                        animateNumber(stat, 0, numericValue, 2000, finalValue);
                    }
                });
                statsObserver.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll('.stats-section').forEach(section => {
        statsObserver.observe(section);
    });

    // Number animation function
    function animateNumber(element, start, end, duration, originalText) {
        const startTime = performance.now();
        
        function updateNumber(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            const current = Math.floor(start + (end - start) * progress);
            element.textContent = originalText.replace(/\d+/, current);
            
            if (progress < 1) {
                requestAnimationFrame(updateNumber);
            }
        }
        
        requestAnimationFrame(updateNumber);
    }
});
