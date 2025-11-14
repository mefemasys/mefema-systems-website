function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('active');
}

// Smooth scroll (para links internos)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
            if (window.innerWidth <= 768) toggleMobileMenu();
        }
    });
});

// Fade in on scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.card, .service-card, .info-card, .value-item, .contact-item').forEach(el => {
    observer.observe(el);
});

// Fecha menu ao clicar fora
document.addEventListener('click', function(e) {
    const menu = document.getElementById('mobileMenu');
    const btn = document.querySelector('.mobile-menu-btn');
    if (menu && menu.classList.contains('active') && !menu.contains(e.target) && !btn.contains(e.target)) {
        menu.classList.remove('active');
    }
});

// Header shadow
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    header.style.boxShadow = window.pageYOffset > 100
        ? '0 5px 20px rgba(0,0,0,0.15)'
        : '0 2px 10px rgba(0,0,0,0.1)';
});

// Console branding
console.log('%cMEFEMA Systems', 'color: #0066CC; font-size: 24px; font-weight: bold;');
console.log('%cSoluções Tecnológicas Inteligentes', 'color: #FF8C42; font-size: 14px;');