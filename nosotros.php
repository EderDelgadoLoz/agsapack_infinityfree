<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - AGSAPACK Soluciones de Empaque Profesional</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap local -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Estilos corporativos existentes -->
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/nosotros.css">
    <link rel="stylesheet" href="assets/css/nosotros_page.css">
</head>
<body>

    <!-- Navbar -->
    <nav id="navbar" class="">
        <div class="navbar">
            <div class="logo-container">
                <a href="index.php" class="logo-link" aria-label="Ir al inicio">
                    <div class="logo-img">
                        <img src="assets/img/logo.png" alt="AGSAPACK Logo">
                    </div>
                </a>
            </div>
            
            <ul class="menu" id="menu" role="menu" aria-label="Menú principal">
                <li role="none"><a href="index.php" role="menuitem">Inicio</a></li>
                <li role="none"><a href="servicios.php" role="menuitem">Servicios</a></li>
                <li role="none"><a href="nosotros.php" class="active" role="menuitem">Nosotros</a></li>
                <li role="none"><a href="index.php#carousel" role="menuitem">Trabajos</a></li>
                
                <a href="contacto.php" class="btn-cotiza" role="button">Contacto</a>
            </ul>
            
            <button class="menu-btn" id="menu-btn" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
<div class="menu-overlay" id="menu-overlay"></div>

  <!-- Hero Nosotros Dividido (Video izquierdo / Texto derecho) -->
<section class="nosotros-hero-divided">
    <!-- Columna izquierda - Video -->
    <div class="hero-video-col">
        <video autoplay muted loop playsinline>
            <source src="assets/videos/maquinado_2.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5
        </video>
        <div class="video-overlay-nosotros"></div>
    </div>
    
    <!-- Columna derecha - Contenido -->
    <div class="hero-content-col-nosotros">
        <div class="content-overlay-nosotros"></div>
        <div class="hero-content-wrapper">
            <h1 class="hero-title-nosotros">CONOCE AGSAPACK</h1>
            <div class="hero-divider"></div>
            <p class="hero-subtitle-nosotros">Liderando la innovación en soluciones de empaque industrial desde 2008. Más de 15 años de excelencia, tecnología de vanguardia y compromiso con la calidad.</p>
            
            <div class="hero-stats-nosotros">
                <div class="stat-card">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Años de Experiencia</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Clientes Satisfechos</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Soporte Técnico</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Calidad Garantizada</div>
                </div>
            </div>
            
            <div class="hero-buttons-nosotros">
                <a href="#historia" class="btn-nosotros btn-primary-nosotros">
                    <i class="fas fa-history btn-icon"></i>
                    <span>Conoce Nuestra Historia</span>
                </a>
                <a href="#equipo" class="btn-nosotros btn-secondary-nosotros">
                    <i class="fas fa-users btn-icon"></i>
                    <span>Nuestro Equipo</span>
                </a>
            </div>
        </div>
    </div>
</section>
    


    <!-- Historia y Misión/Visión -->
    <section class="section-nosotros" id="historia">
        <div class="container">
            <h2 class="section-title">Nuestra Historia y Propósito</h2>
            <p class="section-subtitle">Una trayectoria marcada por la innovación, el crecimiento y el compromiso con la excelencia en cada solución que ofrecemos.</p>
            
            <div class="historia-grid">
                <div class="historia-card">
                    <div class="historia-icon"><i class="fas fa-industry"></i></div>
                    <h3 class="historia-title">Nuestros Orígenes</h3>
                    <div class="historia-text historia-text-justificado">
                        <p>Fundada en 2008 en el corazón industrial de Aguascalientes, AGSAPACK comenzó como una visión audaz de transformar la industria del empaque. Lo que inició como un modesto taller familiar con solo 3 empleados, rápidamente se convirtió en un referente regional gracias a nuestro enfoque en soluciones personalizadas y atención meticulosa al detalle.</p>
                        <p>Desde nuestros humildes comienzos, nos comprometimos a ofrecer productos de la más alta calidad, estableciendo relaciones duraderas con nuestros clientes basadas en la confianza y la excelencia en el servicio.</p>
                    </div>
                </div>
                
                <div class="historia-card">
                    <div class="historia-icon"><i class="fas fa-rocket"></i></div>
                    <h3 class="historia-title">Expansión y Tecnología</h3>
                    <div class="historia-text historia-text-justificado">
                        <p>En 2015, marcamos un hito al inaugurar nuestra planta actual equipada con maquinaria automatizada de última generación. Esta inversión estratégica nos permitió escalar operaciones, implementar controles de calidad avanzados y expandir nuestro alcance a mercados internacionales.</p>
                        <p>Manteniendo siempre nuestro ADN de innovación y excelencia, hemos integrado tecnología de punta que nos posiciona como líderes en el sector de empaques industriales en México y más allá de nuestras fronteras.</p>
                    </div>
                </div>
            </div>
            
            <div class="historia-grid">
                <div class="historia-card">
                    <div class="historia-icon"><i class="fas fa-bullseye"></i></div>
                    <h3 class="historia-title">Nuestra Misión</h3>
                    <div class="historia-text historia-text-justificado">
                        <p>Desarrollar y proveer soluciones integrales de empaque que superen las expectativas de nuestros clientes, combinando tecnología de vanguardia, expertise técnico especializado y un servicio personalizado que impulse la eficiencia operativa y agregue valor tangible a cada proyecto que emprendemos.</p>
                        <p>Nos esforzamos cada día por mantener los más altos estándares de calidad, innovación y servicio, construyendo relaciones sólidas basadas en la confianza mutua y el éxito compartido.</p>
                    </div>
                </div>
                
                <div class="historia-card">
                    <div class="historia-icon"><i class="fas fa-eye"></i></div>
                    <h3 class="historia-title">Nuestra Visión 2030</h3>
                    <div class="historia-text historia-text-justificado">
                        <p>Consolidarnos como el proveedor líder de soluciones de empaque industrial en Latinoamérica, reconocidos por nuestra innovación disruptiva, prácticas sostenibles y capacidad para anticipar las necesidades del mercado global, estableciendo asociaciones estratégicas que perduren en el tiempo.</p>
                        <p>Aspiramos a seguir creciendo de manera sostenible, expandiendo nuestra presencia internacional mientras mantenemos nuestro compromiso con la calidad, la innovación y el servicio excepcional que nos define.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <!-- Valores Corporativos -->
    <section class="section-nosotros" style="background: #f0f7ff;">
        <div class="container">
            <h2 class="section-title">Nuestra Cultura Corporativa</h2>
            <p class="section-subtitle">Los principios fundamentales que guían cada decisión, interacción y solución que desarrollamos en AGSAPACK.</p>
            
            <div class="valores-container">
                <div class="valor-card">
                    <div class="valor-icon-container">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="valor-title">Excelencia Operativa</h3>
                    <p class="valor-desc">Implementamos los más altos estándares de calidad en cada proceso, desde el diseño hasta la entrega final, garantizando consistencia y precisión milimétrica.</p>
                </div>
                
                <div class="valor-card">
                    <div class="valor-icon-container">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="valor-title">Innovación Continua</h3>
                    <p class="valor-desc">Invertimos en I+D y adoptamos tecnologías emergentes para ofrecer soluciones vanguardistas que anticipen las necesidades del mercado.</p>
                </div>
                
                <div class="valor-card">
                    <div class="valor-icon-container">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="valor-title">Integridad Absoluta</h3>
                    <p class="valor-desc">Actuamos con transparencia, ética y honestidad en todas nuestras relaciones comerciales, construyendo confianza a largo plazo.</p>
                </div>
                
                <div class="valor-card">
                    <div class="valor-icon-container">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="valor-title">Sostenibilidad Responsable</h3>
                    <p class="valor-desc">Implementamos prácticas ecoeficientes y materiales reciclables, minimizando nuestro impacto ambiental mientras maximizamos valor.</p>
                </div>
                
                <div class="valor-card">
                    <div class="valor-icon-container">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="valor-title">Colaboración Sinérgica</h3>
                    <p class="valor-desc">Fomentamos un ambiente de trabajo en equipo donde cada contribución se valora y el conocimiento compartido impulsa nuestro crecimiento colectivo.</p>
                </div>
                
                <div class="valor-card">
                    <div class="valor-icon-container">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="valor-title">Orientación al Cliente</h3>
                    <p class="valor-desc">Colocamos las necesidades específicas de cada cliente en el centro de nuestras operaciones, desarrollando soluciones a medida que generan resultados tangibles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería Multimedia -->
    <section class="section-nosotros">
        <div class="container">
            <h2 class="section-title">Nuestras Instalaciones en Acción</h2>
            <p class="section-subtitle">Un vistazo exclusivo a nuestras operaciones, tecnología y procesos que definen la excelencia AGSAPACK.</p>
            
            <div class="galeria-container">
                <!-- Imagen 1 -->
                <div class="media-item">
                    <img src="assets/img/maquina_1.jpg" alt="Proceso de fabricación">
                    <div class="media-overlay">
                        <h4 class="media-title">Línea de Producción Automatizada</h4>
                        <p class="media-desc">Tecnología de precisión alemana en operación</p>
                    </div>
                    <div class="media-play-btn">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
                
                <!-- Video 1 -->
                <div class="video-item">
                    <iframe src="assets/videos/agsapack1.mp4" 
                            title="Proceso de producción AGSAPACK" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Imagen 2 -->
                <div class="media-item">
                    <img src="assets/img/agsapack_banner.png" alt="Control de calidad">
                    <div class="media-overlay">
                        <h4 class="media-title">Control de Calidad Certificado</h4>
                        <p class="media-desc">Inspección meticulosa ISO 9001:2015</p>
                    </div>
                    <div class="media-play-btn">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
                
                <!-- Imagen 3 -->
                <div class="media-item">
                    <img src="assets/img/agsapack2.jpg" alt="Equipo de trabajo">
                    <div class="media-overlay">
                        <h4 class="media-title">Equipo Especializado</h4>
                        <p class="media-desc">Ingenieros y técnicos altamente calificados</p>
                    </div>
                    <div class="media-play-btn">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
                
                <!-- Video 2 -->
                <div class="video-item">
                    <iframe src="assets/videos/proceso1.mp4" 
                            title="Tecnología AGSAPACK" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Imagen 4 -->
                <div class="media-item">
                    <img src="assets/img/maquinado.png" alt="Logística y entrega">
                    <div class="media-overlay">
                        <h4 class="media-title">Logística Integral</h4>
                        <p class="media-desc">Distribución eficiente a nivel nacional</p>
                    </div>
                    <div class="media-play-btn">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipo Directivo -->
    <section class="section-nosotros" id="equipo" style="background: #f8f9fa;">
        <div class="container">
            <h2 class="section-title">Liderazgo Ejecutivo</h2>
            <p class="section-subtitle">Conoce al equipo directivo que impulsa la visión estratégica y la excelencia operativa de AGSAPACK.</p>
            
            <div class="equipo-container">
                <div class="miembro-card-wrapper">
                    <div class="miembro-card">
                        <div class="miembro-front">
                            <img src="at&" alt="Director General" class="miembro-img">
                            <div class="miembro-info">
                                <h3 class="miembro-nombre">Ing. Roberto Martínez</h3>
                                <p class="miembro-cargo">Director General</p>
                                <p class="miembro-desc">Más de 25 años en la industria del empaque. Fundador y visionario detrás del crecimiento exponencial de AGSAPACK.</p>
                            </div>
                        </div>
                        <div class="miembro-back">
                            <h3 class="miembro-back-title">Visión Estratégica</h3>
                            <p class="miembro-back-text">Lidera la expansión internacional y las alianzas estratégicas. Ingeniero Industrial con MBA por el IPADE.</p>
                            <div class="miembro-contact">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="miembro-card-wrapper">
                    <div class="miembro-card">
                        <div class="miembro-front">
                            <img src="  " alt="Directora de Operaciones" class="miembro-img">
                            <div class="miembro-info">
                                <h3 class="miembro-nombre">Mtra. Ana Rodríguez</h3>
                                <p class="miembro-cargo">Directora de Operaciones</p>
                                <p class="miembro-desc">Especialista en optimización de procesos y gestión de la calidad. 18 años liderando equipos de alto rendimiento.</p>
                            </div>
                        </div>
                        <div class="miembro-back">
                            <h3 class="miembro-back-title">Excelencia Operativa</h3>
                            <p class="miembro-back-text">Implementó el sistema de gestión de calidad certificado ISO 9001:2015. Maestría en Ingeniería de Procesos.</p>
                            <div class="miembro-contact">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="miembro-card-wrapper">
                    <div class="miembro-card">
                        <div class="miembro-front">
                            <img src="." alt="Jefe de Ingeniería" class="miembro-img">
                            <div class="miembro-info">
                                <h3 class="miembro-nombre">Dr. Carlos Sánchez</h3>
                                <p class="miembro-cargo">Jefe de Ingeniería</p>
                                <p class="miembro-desc">PhD en Automatización Industrial. Responsable del desarrollo tecnológico y la innovación en procesos.</p>
                            </div>
                        </div>
                        <div class="miembro-back">
                            <h3 class="miembro-back-title">Innovación Tecnológica</h3>
                            <p class="miembro-back-text">Dirige el departamento de I+D con 12 patentes registradas. Experto en Industria 4.0 y digitalización de procesos.</p>
                            <div class="miembro-contact">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <div class="container">
        <div class="cta-nosotros">
            <div class="cta-particles" id="ctaParticles"></div>
            <div class="cta-content">
                <h2 class="cta-title">¿Listo para transformar sus soluciones de empaque?</h2>
                <p class="cta-text">Nuestro equipo de expertos está listo para analizar sus necesidades específicas y desarrollar soluciones personalizadas que impulsen la eficiencia y rentabilidad de sus operaciones.</p>
                <a href="contacto.php" class="cta-button">
                    <span>Solicitar Consultoría Especializada</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- FOOTER  -->
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
        <li><a href="index.php">Inicio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="servicios.php#productos">Productos</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
    </ul>
</div>

<div class="footer-col">
    <h4 class="footer-title">Servicios</h4>
    <ul class="footer-links">
        <li><a href="servicios.php#maquinado">Maquinado</a></li>
        <li><a href="servicios.php#refacciones">Refacciones</a></li>
        <li><a href="servicios.php#soluciones-personalizadas">Soluciones Personalizadas</a></li>
        <li><a href="servicios.php#asesoria">Asesoría Técnica</a></li>
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




    <!-- JavaScript para efectos avanzados -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/nosotros.js"></script>
</body>
</html>