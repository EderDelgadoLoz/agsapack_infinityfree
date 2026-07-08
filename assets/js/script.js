document.addEventListener('DOMContentLoaded', function () {

    /* ==============================
       NAVBAR HAMBURGER MENU
    ============================== */
    var navbar  = document.getElementById('navbar');
    var menuBtn = document.getElementById('menu-btn');
    var menu    = document.getElementById('menu');
    var overlay = document.getElementById('menu-overlay');

    function openMenu() {
        if (!menu || !menuBtn) return;
        menu.classList.add('active');
        menuBtn.classList.add('active');
        menuBtn.setAttribute('aria-expanded', 'true');
        if (overlay) overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        if (!menu || !menuBtn) return;
        menu.classList.remove('active');
        menuBtn.classList.remove('active');
        menuBtn.setAttribute('aria-expanded', 'false');
        if (overlay) overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (menuBtn) {
        menuBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            menu.classList.contains('active') ? closeMenu() : openMenu();
        });
    }

    if (overlay) overlay.addEventListener('click', closeMenu);

    if (menu) {
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 991) closeMenu();
    });

    /* ==============================
       NAVBAR SCROLL EFFECT
    ============================== */
    if (navbar) {
        window.addEventListener('scroll', function () {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    /* ==============================
       ACTIVE NAV LINK ON SCROLL
    ============================== */
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.menu li a');

    window.addEventListener('scroll', function () {
        var current = '';
        sections.forEach(function (s) {
            if (window.scrollY >= s.offsetTop - 120) current = s.id;
        });
        navLinks.forEach(function (a) {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + current) a.classList.add('active');
        });
    });

    /* ==============================
       SMOOTH SCROLL (anchor links)
    ============================== */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                closeMenu();
                var top = target.getBoundingClientRect().top + window.scrollY - 90;
                window.scrollTo({ top: top, behavior: 'smooth' });
            }
        });
    });

    /* ==============================
       VIDEO SECTION (index)
    ============================== */
    window.playVideo = function () {
        var ov = document.querySelector('.video-overlay');
        var iframe = document.getElementById('videoFrame');
        if (ov && iframe) {
            ov.style.display = 'none';
            iframe.src = 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1';
        }
    };

    /* ==============================
       PARTICLES.JS (index hero)
    ============================== */
    if (typeof particlesJS !== 'undefined' && document.getElementById('particles-js')) {
        particlesJS('particles-js', {
            particles: {
                number: { value: 60, density: { enable: true, value_area: 800 } },
                color: { value: '#00aeef' },
                shape: { type: 'circle' },
                opacity: { value: 0.4, random: true },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: '#00aeef', opacity: 0.2, width: 1 },
                move: { enable: true, speed: 2, direction: 'none', random: false, straight: false, out_mode: 'out' }
            },
            interactivity: {
                detect_on: 'canvas',
                events: { onhover: { enable: true, mode: 'repulse' }, onclick: { enable: true, mode: 'push' } }
            },
            retina_detect: true
        });
    }

    /* ==============================
       SCROLL ANIMATIONS
    ============================== */
    if ('IntersectionObserver' in window) {
        var animEls = document.querySelectorAll('[data-animate]');
        if (animEls.length) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            animEls.forEach(function (el) { observer.observe(el); });
        }
    }

});
