// Page-specific JS
/* === Extraído de nosotros.php === */
// JavaScript para efectos del hero
document.addEventListener('DOMContentLoaded', function() {
    // Animación de entrada para elementos
    const animatedElements = document.querySelectorAll('.hero-content-wrapper, .hero-stats-nosotros, .hero-buttons-nosotros');
    
    // Ya están animados con CSS, solo añadimos efectos de hover
    
    // Efecto de paralaje en video
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const videoCol = document.querySelector('.hero-video-col');
        if (videoCol) {
            const rate = scrolled * 0.3;
            videoCol.style.transform = `translateY(${rate}px)`;
        }
    });
    
    // Efecto hover en tarjetas estadísticas
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Efecto hover en botones
    const buttons = document.querySelectorAll('.btn-nosotros');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.05)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Scroll suave para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});

// Script para animaciones de aparición
        document.addEventListener('DOMContentLoaded', function() {
            // Animación de aparición en scroll para las tarjetas
            const historiaCards = document.querySelectorAll('.historia-card');
            
            const cardObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, index * 200);
                        cardObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            historiaCards.forEach(card => {
                cardObserver.observe(card);
            });
            
            // Efecto hover mejorado
            historiaCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    if (this.classList.contains('visible')) {
                        this.style.transform = 'translateY(0)';
                    }
                });
            });
            
            // Efecto de iluminación sutil
            const addGlowEffect = () => {
                historiaCards.forEach(card => {
                    card.addEventListener('mousemove', (e) => {
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        card.style.setProperty('--mouse-x', `${x}px`);
                        card.style.setProperty('--mouse-y', `${y}px`);
                    });
                });
                
                // Añadir estilos para el efecto de iluminación
                const glowStyle = document.createElement('style');
                glowStyle.textContent = `
                    .historia-card {
                        position: relative;
                        overflow: hidden;
                    }
                    
                    .historia-card::after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: radial-gradient(
                            500px circle at var(--mouse-x) var(--mouse-y),
                            rgba(0, 174, 239, 0.05),
                            transparent 40%
                        );
                        opacity: 0;
                        transition: opacity 0.3s ease;
                        pointer-events: none;
                        z-index: 1;
                    }
                    
                    .historia-card:hover::after {
                        opacity: 1;
                    }
                `;
                document.head.appendChild(glowStyle);
            };
            
            // Inicializar efectos después de que las tarjetas sean visibles
            setTimeout(addGlowEffect, 1000);
        });

document.addEventListener('DOMContentLoaded', function() {
            // Efecto de partículas en CTA
            const ctaParticles = document.getElementById('ctaParticles');
            if (ctaParticles) {
                for (let i = 0; i < 20; i++) {
                    const particle = document.createElement('div');
                    particle.classList.add('cta-particle');
                    particle.style.left = `${Math.random() * 100}%`;
                    particle.style.top = `${Math.random() * 100}%`;
                    particle.style.animationDelay = `${Math.random() * 5}s`;
                    particle.style.width = `${Math.random() * 4 + 2}px`;
                    particle.style.height = particle.style.width;
                    ctaParticles.appendChild(particle);
                }
            }
            
            // Scroll animations para títulos y subtítulos
            const sectionTitles = document.querySelectorAll('.section-title, .section-subtitle');
            
            const checkScroll = () => {
                sectionTitles.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('visible');
                    }
                });
            };
            
            // Ejecutar al cargar y al hacer scroll
            checkScroll();
            window.addEventListener('scroll', checkScroll);
            
            // Efectos hover mejorados
            const valorCards = document.querySelectorAll('.valor-card');
            valorCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) rotateX(5deg)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) rotateX(0)';
                });
            });
            
            // Efectos para tarjetas de historia
            const historiaCards = document.querySelectorAll('.historia-card');
            historiaCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-15px) translateZ(20px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) translateZ(0)';
                });
            });
            
            // Efecto para tarjetas flip del equipo
            const memberCards = document.querySelectorAll('.miembro-card');
            memberCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('hover')) {
                        this.style.transform = 'rotateY(180deg)';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'rotateY(0deg)';
                });
            });
            
            // Efecto parallax en hero
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero-nosotros');
                if (hero) {
                    const rate = scrolled * -0.5;
                    hero.style.transform = `translate3d(0, ${rate}px, 0)`;
                }
            });
            
            // Animación de entrada para elementos
            const fadeElements = document.querySelectorAll('.historia-card, .valor-card, .media-item, .miembro-card-wrapper');
            
            const fadeInOnScroll = () => {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Configurar estado inicial
            fadeElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            });
            
            // Ejecutar al cargar y al hacer scroll
            fadeInOnScroll();
            window.addEventListener('scroll', fadeInOnScroll);
            
            // Efecto de brillo en botones
            const buttons = document.querySelectorAll('.cta-button');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.backgroundPosition = '100px';
                });
            });
        });