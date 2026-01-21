// Mobilní navigace
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggle = document.getElementById('navbarToggle');
    const navbarMenu = document.getElementById('navbarMenu');
    
    if (navbarToggle && navbarMenu) {
        navbarToggle.addEventListener('click', function() {
            navbarMenu.classList.toggle('active');
            
            // Animace hamburger menu
            const spans = this.querySelectorAll('span');
            if (navbarMenu.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translateY(8px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translateY(-8px)';
            } else {
                spans[0].style.transform = '';
                spans[1].style.opacity = '';
                spans[2].style.transform = '';
            }
        });
        
        // Zavření menu při kliknutí na odkaz
        const menuLinks = navbarMenu.querySelectorAll('.menu-link');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                navbarMenu.classList.remove('active');
                const spans = navbarToggle.querySelectorAll('span');
                spans[0].style.transform = '';
                spans[1].style.opacity = '';
                spans[2].style.transform = '';
            });
        });
    }
});

// Smooth scroll pro navigaci
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Header shadow při scrollování
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > 0) {
        header.style.boxShadow = '0 4px 15px rgba(0,0,0,0.15)';
    } else {
        header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    }
});

// Animace při načtení stránky
window.addEventListener('load', function() {
    // Fade-in efekt pro elementy
    const fadeElements = document.querySelectorAll('.service-card, .process-step, .contact-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });
    
    fadeElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
});

// Validace kontaktního formuláře
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const message = document.getElementById('message');
        
        let isValid = true;
        
        // Reset previous errors
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        
        // Validace jména
        if (name && name.value.trim() === '') {
            showError(name, 'Vyplňte prosím jméno');
            isValid = false;
        }
        
        // Validace emailu
        if (email && email.value.trim() === '') {
            showError(email, 'Vyplňte prosím email');
            isValid = false;
        } else if (email && !isValidEmail(email.value)) {
            showError(email, 'Zadejte prosím platnou emailovou adresu');
            isValid = false;
        }
        
        // Validace zprávy
        if (message && message.value.trim() === '') {
            showError(message, 'Vyplňte prosím zprávu');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
            // Scroll k prvnímu erroru
            const firstError = document.querySelector('.error-message');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
}

function showError(input, message) {
    const formGroup = input.parentElement;
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.style.color = '#dc3545';
    errorDiv.style.fontSize = '0.875rem';
    errorDiv.style.marginTop = '5px';
    errorDiv.textContent = message;
    formGroup.appendChild(errorDiv);
    input.style.borderColor = '#dc3545';
    
    // Remove error on input
    input.addEventListener('input', function() {
        errorDiv.remove();
        input.style.borderColor = '';
    }, { once: true });
}

function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Lazy loading pro obrázky
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Performance: odložení načítání Google Maps
let mapLoaded = false;
const mapSection = document.querySelector('.map-section');

if (mapSection) {
    const mapObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !mapLoaded) {
                mapLoaded = true;
                // Mapa se načte až když se uživatel dostane k sekci
                console.log('Map section visible - map already loaded in HTML');
            }
        });
    }, {
        rootMargin: '200px'
    });
    
    mapObserver.observe(mapSection);
}

// Back to top tlačítko (volitelné)
function createBackToTop() {
    const button = document.createElement('button');
    button.innerHTML = '↑';
    button.className = 'back-to-top';
    button.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: var(--primary-color);
        color: white;
        border: none;
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    `;
    
    document.body.appendChild(button);
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            button.style.opacity = '1';
            button.style.visibility = 'visible';
        } else {
            button.style.opacity = '0';
            button.style.visibility = 'hidden';
        }
    });
    
    button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Aktivace back to top tlačítka
createBackToTop();

// Console info (volitelné - můžete odstranit)
console.log('%c🔨 MR METALL s.r.o.', 'font-size: 20px; font-weight: bold; color: #c41e3a;');
console.log('%cKompetence – Všestrannost – Spolehlivost', 'font-size: 14px; color: #666;');
