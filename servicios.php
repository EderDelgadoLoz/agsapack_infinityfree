<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios - AGSAPACK</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Asegurar que las rutas CSS sean correctas -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/servicios.css">
    <link rel="stylesheet" href="assets/css/servicios_page.css">
</head>
<body>

<!-- Barra de Navegación -->
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
            <li role="none"><a href="index.php#inicio" role="menuitem">Inicio</a></li>
            <li role="none"><a href="servicios.php" class="active" role="menuitem">Servicios</a></li> 
            <li role="none"><a href="nosotros.php" role="menuitem">Nosotros</a></li>
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

<!-- HERO DIVIDIDO (Video izquierdo / Texto derecho) -->
<section class="servicios-hero-divided">
    <!-- Columna izquierda - Video -->
    <div class="hero-video-col">
        <video autoplay muted loop playsinline poster="assets/img/maquinado.png">
            <source src="assets/videos/bolsas.mp4" type="video/mp4">
            <img src="assets/img/maquinado.png" alt="Servicios AGSAPACK" style="width:100%;height:100%;object-fit:cover;">
        </video>
        <div class="video-overlay-services"></div>
    </div>
    
    <!-- Columna derecha - Contenido -->
    <div class="hero-content-col-services">
        <div class="hero-particles-services"></div>
        <div class="content-overlay-services"></div>
        <div class="floating-elements" id="floatingElements"></div>
        
        <div class="hero-content-services">
            <h1>Servicios Especializados</h1>
            <p>Innovación y tecnología de vanguardia en soluciones de empaque industrial para optimizar tu producción</p>
            
            <div class="hero-stats-services">
                <div class="hero-stat-item">
                    <span class="stat-number">15</span>
                    <span class="stat-label">Años de Experiencia</span>
                </div>
                <div class="hero-stat-item">
                    <span class="stat-number">500</span>
                    <span class="stat-label">Clientes Satisfechos</span>
                </div>
                <div class="hero-stat-item">
                    <span class="stat-number">100</span>
                    <span class="stat-label">Proyectos Exitosos</span>
                </div>
            </div>
            
            <div class="hero-buttons-services">
                <a href="#servicios" class="hero-btn hero-btn-primary">
                    <i class="fas fa-cogs btn-icon"></i>
                    <span>Explorar Servicios</span>
                </a>
                <a href="contacto.php" class="hero-btn hero-btn-secondary">
                    <i class="fas fa-headset btn-icon"></i>
                    <span>Solicitar Asesoría</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Galería de Servicios -->
<section class="galeria-servicios" id="servicios">
    <div class="container">
        <!-- Filtros -->
        <div class="filtros-servicios">
            <button class="filtro-btn active" data-filter="todos">Todos los Servicios</button>
            <button class="filtro-btn" data-filter="empaques">Empaques Industriales</button>
            <button class="filtro-btn" data-filter="maquinado">Maquinado</button>
            <button class="filtro-btn" data-filter="consultoria">Consultoría</button>
        </div>

        <!-- Grid de Servicios -->
        <div class="grid-servicios">
            <!-- Servicio 1 -->
            <div class="servicio-item" data-category="empaques">
                <div class="servicio-imagen">
                    <img src="" alt="Empaques Industriales">
                    <span class="servicio-categoria">Empaques</span>
                </div>
                <div class="servicio-contenido">
                    <h3>Empaques Industriales Personalizados</h3>
                    <p>Desarrollamos empaques a medida para diferentes industrias con materiales de alta resistencia y durabilidad.</p>
                    
                    <ul class="servicio-caracteristicas">
                        <li>Materiales de alta resistencia</li>
                        <li>Diseños personalizados</li>
                        <li>Control de calidad riguroso</li>
                        <li>Entrega oportuna</li>
                    </ul>
                    
                    <a href="#" class="servicio-boton" data-service="1">
                        <i class="fas fa-eye"></i>
                        <span>Ver Detalles</span>
                    </a>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="servicio-item" data-category="maquinado">
                <div class="servicio-imagen">
                    <img src="assets/img/agsapack1_maquinado.jpg" alt="Maquinado de Bolsas">
                    <span class="servicio-categoria">Maquinado</span>
                </div>
                <div class="servicio-contenido">
                    <h3>Maquinado de Bolsas Industriales</h3>
                    <p>Procesos automatizados de sellado, impresión y empaque con precisión industrial y tecnología de vanguardia.</p>
                    
                    <ul class="servicio-caracteristicas">
                        <li>Sellado de alta precisión</li>
                        <li>Impresión de calidad</li>
                        <li>Automatización completa</li>
                        <li>Control dimensional</li>
                    </ul>
                    
                    <a href="#" class="servicio-boton" data-service="2">
                        <i class="fas fa-eye"></i>
                        <span>Ver Detalles</span>
                    </a>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="servicio-item" data-category="consultoria">
                <div class="servicio-imagen">
                    <img src="assets/img/agsapack2.jpg" alt="Consultoría Técnica">
                    <span class="servicio-categoria">Consultoría</span>
                </div>
                <div class="servicio-contenido">
                    <h3>Consultoría Técnica Especializada</h3>
                    <p>Asesoría experta en empaques, materiales y procesos industriales sostenibles para optimizar tu producción.</p>
                    
                    <ul class="servicio-caracteristicas">
                        <li>Análisis de procesos</li>
                        <li>Optimización de materiales</li>
                        <li>Soluciones sostenibles</li>
                        <li>Asesoría continua</li>
                    </ul>
                    
                    <a href="#" class="servicio-boton" data-service="3">
                        <i class="fas fa-eye"></i>
                        <span>Ver Detalles</span>
                    </a>
                </div>
            </div>

            <!-- Servicio 4 -->
            <div class="servicio-item" data-category="empaques">
                <div class="servicio-imagen">
                    <img src="assets/img/enpaques.png" alt="Empaques Especiales">
                    <span class="servicio-categoria">Empaques</span>
                </div>
                <div class="servicio-contenido">
                    <h3>Empaques para Productos Especiales</h3>
                    <p>Soluciones de empaque para productos que requieren condiciones especiales de protección y conservación.</p>
                    
                    <ul class="servicio-caracteristicas">
                        <li>Protección contra humedad</li>
                        <li>Barrera contra oxígeno</li>
                        <li>Empaques estériles</li>
                        <li>Control de temperatura</li>
                    </ul>
                    
                    <a href="#" class="servicio-boton" data-service="4">
                        <i class="fas fa-eye"></i>
                        <span>Ver Detalles</span>
                    </a>
                </div>
            </div>

            <!-- Servicio 5 -->
            <div class="servicio-item" data-category="maquinado">
                <div class="servicio-imagen">
                    <img src="assets/img/maquina_1.jpg" alt="Mantenimiento de Maquinaria">
                    <span class="servicio-categoria">Maquinado</span>
                </div>
                <div class="servicio-contenido">
                    <h3>Mantenimiento de Maquinaria</h3>
                    <p>Servicios especializados de mantenimiento preventivo y correctivo para equipos de empaque y maquinaria industrial.</p>
                    
                    <ul class="servicio-caracteristicas">
                        <li>Mantenimiento preventivo</li>
                        <li>Reparaciones especializadas</li>
                        <li>Refacciones originales</li>
                        <li>Servicio de emergencia</li>
                    </ul>
                    
                    <a href="#" class="servicio-boton" data-service="5">
                        <i class="fas fa-eye"></i>
                        <span>Ver Detalles</span>
                    </a>
                </div>
            </div>

            <!-- Servicio 6 -->
            <div class="servicio-item" data-category="consultoria">
                <div class="servicio-imagen">
                    <img src="assets/img/data.png" alt="Optimización de Procesos">
                    <span class="servicio-categoria">Consultoría</span>
                </div>
                <div class="servicio-contenido">
                    <h3>Optimización de Procesos</h3>
                    <p>Mejoramos la eficiencia de tus líneas de producción mediante análisis especializado y implementación de mejoras.</p>
                    
                    <ul class="servicio-caracteristicas">
                        <li>Análisis de eficiencia</li>
                        <li>Reducción de mermas</li>
                        <li>Mejora continua</li>
                        <li>Capacitación del personal</li>
                    </ul>
                    
                    <a href="#" class="servicio-boton" data-service="6">
                        <i class="fas fa-eye"></i>
                        <span>Ver Detalles</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="servicios-cta">
    <div class="container">
        <h2>¿Necesitas una solución específica?</h2>
        <p>Contáctanos para desarrollar empaques personalizados que se adapten exactamente a tus necesidades</p>
        <div class="cta-buttons">
            <a href="contacto.php" class="btn btn-warning btn-lg">Solicitar Cotización</a>
            <a href="contacto.php" class="btn btn-outline-light btn-lg">Contactar a un Asesor</a>
        </div>
    </div>
</section>

<!-- MODAL DE SERVICIOS MODIFICADO - SIN IMAGEN, SOLO TEXTO -->
<div class="modal-overlay" id="serviceModal">
    <div class="modal-container">
        <div class="modal-header">
            <button class="modal-close" id="modalClose">&times;</button>
            <div class="modal-header-content">
                <h2 class="modal-title" id="modalTitle">Título del Servicio</h2>
                <span class="modal-category" id="modalCategory">Categoría</span>
            </div>
        </div>
        
        <div class="modal-content">
            <div class="modal-grid">
                <!-- SOLO INFORMACIÓN TEXTUAL - SIN IMAGEN -->
                <div class="modal-info">
                    <h3>Descripción Detallada</h3>
                    <p class="modal-description" id="modalDescription">
                        Descripción detallada del servicio...
                    </p>
                    
                    <div class="modal-features">
                        <h4><i class="fas fa-check-circle"></i> Características Principales</h4>
                        <ul id="modalFeatures">
                            <!-- Características se agregarán dinámicamente -->
                        </ul>
                    </div>
                    
                    <div class="modal-specs">
                        <h4><i class="fas fa-cogs"></i> Especificaciones Técnicas</h4>
                        <div class="modal-specs-grid" id="modalSpecs">
                            <!-- Especificaciones se agregarán dinámicamente -->
                        </div>
                    </div>
                    
                    <div class="modal-features">
                        <h4><i class="fas fa-star"></i> Beneficios</h4>
                        <ul id="modalBenefits">
                            <!-- Beneficios se agregarán dinámicamente -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FOOTER DEL MODAL - SIN PRECIO, SOLO INFORMACIÓN DE CONTACTO -->
        <div class="modal-footer">
            <div class="modal-contact-info">
                <i class="fas fa-phone"></i> +52 449 123 4567 | 
                <i class="fas fa-envelope"></i> info@agsapack.com |
                <i class="fas fa-clock"></i> Lun-Vie 8:00 am - 6:00 pm
            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/servicios.js"></script>
</body>
</html>