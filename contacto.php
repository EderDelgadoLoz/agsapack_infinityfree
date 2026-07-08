<?php
// contacto.php
session_start();

// Verificar si el usuario está logueado (para mostrar botón de admin)
$es_admin = isset($_SESSION['es_admin']) && $_SESSION['es_admin'] === true;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGSAPACK - Contacto</title>
    
    <!-- Mismos estilos que tu página principal -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/contacto.css">
</head>
<body>

<!-- Navbar (mismo que tu página principal) -->
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
            <li role="none"><a href="index.php" class="active" role="menuitem">Inicio</a></li>
            <li role="none"><a href="servicios.php" role="menuitem">Servicios</a></li>
            <li role="none"><a href="nosotros.php" role="menuitem">Nosotros</a></li>
            <li role="none"><a href="#carousel" role="menuitem">Trabajos</a></li>
            <a href="contacto.php" class="btn-cotiza" role="button">Contacto</a>
            
            <!-- Botón de administrador (solo visible si está logueado) -->
            <?php if ($es_admin): ?>
            <a href="admin/tickets.php" class="btn-admin" role="button">
                <i class="fas fa-cogs me-2"></i>Admin
            </a>
            <?php endif; ?>
        </ul>
        
        <button class="menu-btn" id="menu-btn" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
<div class="menu-overlay" id="menu-overlay"></div>

<!-- Hero section de contacto con video -->
<section class="contacto-hero">
    <!-- Video de fondo -->
    <video autoplay muted loop playsinline class="hero-video-bg" poster="assets/img/agsapack2.jpg">
        <source src="assets/videos/maquinado_2.mp4" type="video/mp4">
        <!-- Video de respaldo si no se carga -->
        <source src="assets/videos/maquinado_2.mp4" type="video/mp4">
    </video>
    
    <!-- Iconos flotantes -->
    <div class="floating-icon" style="top: 20%; left: 10%; animation-delay: 0s;">
        <i class="fas fa-envelope"></i>
    </div>
    <div class="floating-icon" style="top: 30%; right: 15%; animation-delay: 0.5s;">
        <i class="fas fa-phone"></i>
    </div>
    <div class="floating-icon" style="bottom: 40%; left: 15%; animation-delay: 1s;">
        <i class="fas fa-comments"></i>
    </div>
    <div class="floating-icon" style="bottom: 30%; right: 10%; animation-delay: 1.5s;">
        <i class="fas fa-headset"></i>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-4 mb-4 animate__animated animate__fadeInDown">Contáctanos</h1>
                <p class="lead animate__animated animate__fadeInUp animate__delay-1s">¿Tienes preguntas sobre nuestros servicios? ¿Necesitas una cotización personalizada? Envíanos tu consulta y te responderemos en menos de 24 horas.</p>
                




               <?php if (!$es_admin): ?>
<div class="mt-4 animate__animated animate__fadeInUp animate__delay-2s">
    <a href="admin\login.php" class="btn btn-outline-light btn-lg pulse btn-admin-login">
        <i class="fas fa-user-cog me-2"></i>Acceso Administrador
    </a>
</div>
<?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Formulario de contacto/tickets -->
<section class="ticket-form-section">
    <!-- Fondo  -->
    <div class="form-background"></div>
    <div class="form-pattern"></div>
    
    
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>
    
    <div class="container">
        <div class="form-container animate__animated animate__fadeInUp">
            <h2 class="form-title">Envíanos tu consulta</h2>
            
            <?php
            
            if (isset($_SESSION['ticket_message'])) {
                $messageType = $_SESSION['ticket_message_type'] ?? 'success';
                $alertClass = '';
                $icon = '';
                
                switch ($messageType) {
                    case 'success':
                        $alertClass = 'alert-success';
                        $icon = '✅';
                        break;
                    case 'error':
                        $alertClass = 'alert-error';
                        $icon = '❌';
                        break;
                    case 'warning':
                        $alertClass = 'alert-warning';
                        $icon = '⚠️';
                        break;
                    default:
                        $alertClass = 'alert-success';
                        $icon = 'ℹ️';
                }
                
                echo '<div class="alert-message ' . $alertClass . '">';
                echo '<div style="display: flex; align-items: center; gap: 10px;">';
                echo '<span style="font-size: 1.5em;">' . $icon . '</span>';
                echo '<div>' . $_SESSION['ticket_message'] . '</div>';
                echo '</div>';
                echo '</div>';
                
               
                if (isset($_SESSION['datos_formulario'])) {
                    echo '';
                    
                    unset($_SESSION['datos_formulario']);
                }
                
                unset($_SESSION['ticket_message']);
                unset($_SESSION['ticket_message_type']);
            }
            ?>
            
            <!-- FORMULARIO DE CONTACTO -->
            <form action="procesar_ticket.php" method="POST" id="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre completo *</label>
                            <input type="text" class="form-control form-control-custom" id="nombre" name="nombre" required placeholder="Ingresa tu nombre completo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Correo electrónico *</label>
                            <input type="email" class="form-control form-control-custom" id="email" name="email" required placeholder="ejemplo@correo.com">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control form-control-custom" id="telefono" name="telefono" placeholder="(449) 123-4567">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="empresa" class="form-label">Empresa</label>
                            <input type="text" class="form-control form-control-custom" id="empresa" name="empresa" placeholder="Nombre de tu empresa">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="asunto" class="form-label">Asunto *</label>
                    <select class="form-control form-control-custom" id="asunto" name="asunto" required>
                        <option value="">Selecciona un asunto</option>
                        <option value="Cotización">Cotización de productos</option>
                        <option value="Soporte técnico">Soporte técnico</option>
                        <option value="Consulta general">Consulta general</option>
                        <option value="Servicio post-venta">Servicio post-venta</option>
                        <option value="Trabajo en equipo">Propuesta de trabajo en equipo</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="mensaje" class="form-label">Mensaje *</label>
                    <textarea class="form-control form-control-custom" id="mensaje" name="mensaje" rows="6" required placeholder="Describe tu consulta en detalle..."></textarea>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="privacidad" name="privacidad" required style="width: 18px; height: 18px;">
                        <label class="form-check-label" for="privacidad" style="color: #5d6d7e;">
                            Acepto la <a href="#" style="color: #00AEEF; text-decoration: underline;">política de privacidad</a> y autorizo el tratamiento de mis datos.
                        </label>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-ticket btn-lg" id="btnEnviarPrincipal">
                        <i class="fas fa-paper-plane me-2"></i> Enviar consulta
                    </button>
                </div>
            </form>
            
        
        <br>
        <br>
        <br>

        <!-- Información de contacto adicional -->
        <div class="row mt-5">
            <div class="col-md-4 text-center mb-4">
                <div class="contact-info-box animate__animated animate__fadeInLeft">
                    <div class="contact-icon-box">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <h4>Ubicación</h4>
                    <p>Aguascalientes, México<br>Zona Industrial Norte</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="contact-info-box animate__animated animate__fadeInUp">
                    <div class="contact-icon-box">
                        <i class="fas fa-phone fa-2x"></i>
                    </div>
                    <h4>Teléfono</h4>
                    <p>+52 449 123 4567<br>Lun-Vie 8:00 am - 6:00 pm</p>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="contact-info-box animate__animated animate__fadeInRight">
                    <div class="contact-icon-box">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <h4>Email</h4>
                    <p>info@agsapack.com<br>Respuesta en menos de 24h</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER COMPLETO -->
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
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" aria-label="Instagram" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" aria-label="LinkedIn" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" aria-label="YouTube" class="social-icon">
                    <i class="fab fa-youtube"></i>
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

<!-- Scripts -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
<script src="assets/js/script.js"></script>
</body>
</html>