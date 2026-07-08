<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGSAPACK - Soluciones de Empaque Profesional</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap local -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Estilos corporativos existentes -->
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Estilos principales -->
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar">
    <div class="navbar">
        <div class="logo-container">
            <a href="#inicio" class="logo-link" aria-label="Ir al inicio">
                <div class="logo-img">
                    <img src="assets/img/logo.png" alt="AGSAPACK Logo">
                </div>
            </a>
        </div>
        
        <ul class="menu" id="menu" role="menu" aria-label="Menú principal">
            <li role="none"><a href="#inicio" class="active" role="menuitem">Inicio</a></li>
            <li role="none"><a href="servicios.php" role="menuitem">Servicios</a></li>
            <li role="none"><a href="nosotros.php" role="menuitem">Nosotros</a></li>
            <li role="none"><a href="#carousel" role="menuitem">Trabajos</a></li>
            <li role="none"><a href="contacto.php" class="btn-cotiza" role="button">Contacto</a></li>
        </ul>
        
        <button class="menu-btn" id="menu-btn" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
<div class="menu-overlay" id="menu-overlay"></div>

<!-- HERO DIVIDIDO -->
<section id="inicio" class="hero-divided-inverse">
    <div class="hero-video-col-left">
        <video class="hero-video-left" autoplay muted loop playsinline poster="assets/img/agsapack_banner.png">
            <source src="assets/videos/agsapack1.mp4" type="video/mp4">
            <img src="assets/img/agsapack_banner.png" alt="AGSAPACK Hero" class="hero-video-left">
        </video>
        <div class="video-overlay-left"></div>
    </div>
    
    <div class="hero-content-col-right">
        <div class="hero-particles" id="particles-js"></div>
        <div class="content-overlay-right"></div>
        
        <div class="hero-content-inverse">
            <div class="brand-marker-inverse">
                <div class="brand-line-inverse"></div>
                <div class="brand-text-inverse">AGSAPACK</div>
                <div class="brand-line-inverse"></div>
            </div>
            
            <h1 class="hero-title-inverse">
                <span class="title-line-inverse title-line-1-inverse">SOLUCIONES</span>
                <span class="title-line-inverse title-line-2-inverse">DE EMPAQUE</span>
                <span class="title-line-inverse title-line-3-inverse">PROFESIONAL</span>
            </h1>
            
            <h2 class="hero-subtitle-inverse">
                Innovación, calidad y tecnología avanzada en cada empaque que producimos.
                Líderes en soluciones industriales con más de 15 años de experiencia.
            </h2>
            
            <div class="divider-inverse"></div>
            
            <div class="hero-buttons-inverse">
                <a href="servicios.php" class="btn-inverse btn-primary-inverse">
                    <span class="btn-text-inverse">Servicios</span>
                </a>
                <a href="contacto.php" class="btn-inverse btn-secondary-inverse">
                    <span class="btn-text-inverse">Contactar</span>
                </a>
            </div>
            
            <div class="hero-info-inverse">
                <div class="info-item-inverse">
                    <div class="info-number-inverse">15+</div>
                    <div class="info-label-inverse">Años Experiencia</div>
                </div>
                <div class="info-divider-inverse"></div>
                <div class="info-item-inverse">
                    <div class="info-number-inverse">500+</div>
                    <div class="info-label-inverse">Clientes Satisfechos</div>
                </div>
                <div class="info-divider-inverse"></div>
                <div class="info-item-inverse">
                    <div class="info-number-inverse">24/7</div>
                    <div class="info-label-inverse">Soporte Técnico</div>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator-inverse">
            <div class="mouse-inverse">
                <div class="wheel-inverse"></div>
            </div>
            <span class="scroll-text-inverse">Desplazar</span>
        </div>
    </div>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h1 class="section-title">Nuestros Servicios</h1>
            <br>
            <h3>Soluciones integrales para todas tus necesidades de empaque</h3>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="service-icon">📦</div>
                    <div class="card-body text-center">
                        <h4>Empaques Industriales</h4>
                        <p>Fabricamos empaques resistentes y personalizados con calidad garantizada.</p>
                        <div class="service-features">
                            <span>Personalizados</span>
                            <span>Alta resistencia</span>
                            <span>Varios materiales</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="service-icon">⚙️</div>
                    <div class="card-body text-center">
                        <h4>Maquinado de Bolsas</h4>
                        <p>Proceso automatizado de sellado, corte e impresión con precisión industrial.</p>
                        <div class="service-features">
                            <span>Precisión milimétrica</span>
                            <span>Tecnología avanzada</span>
                            <span>Control de calidad</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="service-icon">📊</div>
                    <div class="card-body text-center">
                        <h4>Consultoría Técnica</h4>
                        <p>Optimización de procesos, materiales e ingeniería para tu producción.</p>
                        <div class="service-features">
                            <span>Análisis especializado</span>
                            <span>Mejora continua</span>
                            <span>Soporte técnico</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROYECTOS -->
<section id="carousel" class="proyectos-elegantes">
    <div class="container">
        <div class="proyectos-header">
            <span class="proyectos-subtitulo">Nuestro Portafolio</span>
            <h2 class="proyectos-titulo">
                Proyectos <span class="titulo-destacado">Destacados</span>
            </h2>
            <p class="proyectos-descripcion">
                Soluciones innovadoras que transforman la industria del empaque
            </p>
        </div>

        <div class="proyectos-grid">
            <!-- Proyecto 1 -->
            <div class="proyecto-card">
                <div class="proyecto-imagen-contenedor">
                    <img src="assets/img/plc.png" alt="Actualización PLC" class="proyecto-imagen">
                </div>
                <div class="proyecto-contenido">
                    <div class="proyecto-categoria">
                        <i class="fas fa-cogs"></i>
                        Automatización Industrial
                    </div>
                    <h3 class="proyecto-nombre">Actualización de Controladores PLC</h3>
                    <p class="proyecto-resumen">
                        Migración completa de sistemas obsoletos a tecnología Siemens de última generación para optimización de procesos industriales en sector automotriz.
                    </p>
                    <div class="proyecto-resultados">
                        <div class="resultado">
                            <i class="fas fa-chart-line"></i>
                            <span>+40% eficiencia productiva</span>
                        </div>
                        <div class="resultado">
                            <i class="fas fa-clock"></i>
                            <span>-25% tiempos de ciclo</span>
                        </div>
                    </div>
                    <div class="proyecto-detalles">
                        <div class="detalle-item">
                            <i class="far fa-calendar"></i>
                            <span>4 semanas</span>
                        </div>
                        <div class="detalle-item">
                            <i class="fas fa-industry"></i>
                            <span>Actualización de maquinaria</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="proyecto-card">
                <div class="proyecto-imagen-contenedor">
                    <img src="assets/img/maquina_1.jpg" alt="Maquinado Bolsas" class="proyecto-imagen">
                </div>
                <div class="proyecto-contenido">
                    <div class="proyecto-categoria">
                        <i class="fas fa-cut"></i>
                        Maquinado de Precisión
                    </div>
                    <h3 class="proyecto-nombre">Sistema de Corte Automatizado</h3>
                    <p class="proyecto-resumen">
                        Implementación de línea de producción con tolerancias de ±0.1mm para empaques flexibles en industria alimenticia con control CNC avanzado.
                    </p>
                    <div class="proyecto-resultados">
                        <div class="resultado">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>+60% capacidad productiva</span>
                        </div>
                        <div class="resultado">
                            <i class="fas fa-recycle"></i>
                            <span>-45% mermas de material</span>
                        </div>
                    </div>
                    <div class="proyecto-detalles">
                        <div class="detalle-item">
                            <i class="far fa-calendar"></i>
                            <span>2 semanas</span>
                        </div>
                        <div class="detalle-item">
                            <i class="fas fa-industry"></i>
                            <span>Sector Alimenticio</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="proyecto-card">
                <div class="proyecto-imagen-contenedor">
                    <img src="assets/img/agsapack_banner.png" alt="Consultoría Técnica" class="proyecto-imagen">
                </div>
                <div class="proyecto-contenido">
                    <div class="proyecto-categoria">
                        <i class="fas fa-user-tie"></i>
                        Consultoría Técnica
                    </div>
                    <h3 class="proyecto-nombre">Optimización de Procesos</h3>
                    <p class="proyecto-resumen">
                        Diagnóstico integral y plan de mejora para incrementar la eficiencia operativa en planta manufacturera con análisis de flujo y automatización.
                    </p>
                    <div class="proyecto-resultados">
                        <div class="resultado">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>-25% costos operativos</span>
                        </div>
                        <div class="resultado">
                            <i class="fas fa-bolt"></i>
                            <span>+35% eficiencia energética</span>
                        </div>
                    </div>
                    <div class="proyecto-detalles">
                        <div class="detalle-item">
                            <i class="far fa-calendar"></i>
                            <span>6 semanas</span>
                        </div>
                        <div class="detalle-item">
                            <i class="fas fa-industry"></i>
                            <span>Sector Manufactura</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estadísticas -->
        <div class="proyectos-estadisticas">
            <div class="estadistica">
                <div class="estadistica-numero" data-count="150">150</div>
                <div class="estadistica-texto">Proyectos Completados</div>
            </div>
            <div class="estadistica">
                <div class="estadistica-numero" data-count="98">98</div>
                <div class="estadistica-texto">% Satisfacción</div>
            </div>
            <div class="estadistica">
                <div class="estadistica-numero" data-count="12">12</div>
                <div class="estadistica-texto">Años Experiencia</div>
            </div>
            <div class="estadistica">
                <div class="estadistica-numero" data-count="24">24</div>
                <div class="estadistica-texto">Horas Soporte</div>
            </div>
        </div>
    </div>
</section>

<!-- VIDEO -->
<section id="video" class="py-5 bg-dark text-white">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Conoce Nuestra Planta</h2>
            <p class="section-subtitle">Tecnología de vanguardia y procesos optimizados</p>
        </div>

        <div class="video-wrapper">
            <div class="video-container">
                <div class="video-overlay" role="button" aria-label="Reproducir video" onclick="playVideo()">
                    <div class="play-button">
                        <div class="play-icon"></div>
                    </div>
                    <div class="video-preview-text">
                        <h4>Tour Virtual</h4>
                        <p>Haz clic para ver nuestro proceso</p>
                    </div>
                </div>
                <iframe id="videoFrame" src="" title="Conoce Nuestra Planta" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- UBICACIÓN -->
<section id="ubicacion" class="ubicacion-section">
    <div class="titulo-ubicacion">
        <h2>Nuestra Ubicación</h2>
        <div class="subrayado-animado"></div>
        <p>Visítanos en nuestra planta industrial</p>
    </div>

    <div class="ubicacion-wrapper">
        <div class="map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.091674071472!2d-102.3007341238383!3d21.78011968022083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ef6d49e7c6f7%3A0x841427d60c308a0b!2sAguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1710027895639!5m2!1ses!2smx" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-elegante">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <a href="index.php" class="footer-logo-link">
                    <div class="footer-logo">
                        <img src="assets/img/logo.png" alt="AGSAPACK" class="footer-logo-img">
                        <h3>AGSAPACK</h3>
                    </div>
                </a>
                <p class="footer-desc">
                    Soluciones profesionales en empaque industrial con más de 15 años de experiencia en el mercado.
                </p>
                <div class="footer-stats">
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Clientes</span>
                    </div>
                </div>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Enlaces</h4>
                <ul class="footer-links">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="servicios.php">Productos</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Servicios</h4>
                <ul class="footer-links">
                    <li><a href="servicios.php">Maquinado</a></li>
                    <li><a href="servicios.php">Refacciones</a></li>
                    <li><a href="servicios.php">Soluciones Personalizadas</a></li>
                    <li><a href="servicios.php">Asesoría Técnica</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Contacto</h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="contact-icon">📍</i>
                        <div>
                            <p>Aguascalientes, México</p>
                            <small>Zona Industrial Norte</small>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="contact-icon">📞</i>
                        <div>
                            <p>+52 449 123 4567</p>
                            <small>Lun-Vie 8am-6pm</small>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="contact-icon">✉️</i>
                        <div>
                            <p>info@agsapack.com</p>
                            <small>Respuesta en 24h</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Redes sociales -->
        <div class="footer-social">
            <h5>Síguenos</h5>
            <div class="social-icons">
                <a href="#" aria-label="Facebook" class="social-icon">
                    <span>f</span>
                </a>
                <a href="#" aria-label="Instagram" class="social-icon">
                    <span>ig</span>
                </a>
                <a href="#" aria-label="LinkedIn" class="social-icon">
                    <span>in</span>
                </a>
                <a href="#" aria-label="YouTube" class="social-icon">
                    <span>yt</span>
                </a>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom">
            <p class="copyright">
                © 2025 <strong>AGSAPACK</strong>. Todos los derechos reservados.
            </p>
            <div class="legal-links">
                <a href="#">Privacidad</a>
                <a href="#">Términos</a>
                <a href="#">Aviso Legal</a>
            </div>
        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>