// Page-specific JS
/* === Extraído de servicios.php === */
// Datos completos de los servicios (MODIFICADO - SIN IMÁGENES EN EL MODAL)
const serviciosData = {
    1: {
        title: "Empaques Industriales Personalizados",
        category: "Empaques",
        description: "Desarrollamos empaques a medida para diferentes industrias utilizando materiales de alta resistencia y durabilidad. Nuestros empaques personalizados garantizan la protección óptima de tus productos durante el almacenamiento y transporte.",
        features: [
            "Materiales de alta resistencia y durabilidad",
            "Diseños personalizados según requerimientos específicos",
            "Control de calidad riguroso en cada etapa del proceso",
            "Entrega oportuna y cumplimiento de plazos",
            "Asesoría en selección de materiales"
        ],
        benefits: [
            "Protección superior de productos",
            "Reducción de mermas y daños",
            "Optimización de espacios de almacenamiento",
            "Mejora en la presentación del producto",
            "Sostenibilidad y reciclabilidad"
        ],
        specs: [
            { label: "Materiales disponibles", value: "Polipropileno, Polietileno, Nylon" },
            { label: "Resistencia máxima", value: "Hasta 50 kg" },
            { label: "Temperatura de uso", value: "-40°C a 120°C" },
            { label: "Tiempo de producción", value: "3-7 días hábiles" },
            { label: "Certificaciones", value: "ISO 9001, FDA" },
            { label: "Color disponible", value: "Personalizable" }
        ]
    },
    2: {
        title: "Maquinado de Bolsas Industriales",
        category: "Maquinado",
        description: "Procesos automatizados de sellado, impresión y empaque con precisión industrial y tecnología de vanguardia. Garantizamos calidad y eficiencia en cada etapa de producción.",
        features: [
            "Sellado de alta precisión con control térmico",
            "Impresión de calidad con tintas ecológicas",
            "Automatización completa de procesos",
            "Control dimensional estricto",
            "Sistemas de inspección automática"
        ],
        benefits: [
            "Mayor velocidad de producción",
            "Consistencia en calidad",
            "Reducción de desperdicios",
            "Optimización de recursos",
            "Flexibilidad en diseños"
        ],
        specs: [
            { label: "Velocidad de producción", value: "Hasta 150 unidades/min" },
            { label: "Precisión de sellado", value: "±0.5 mm" },
            { label: "Ancho máximo", value: "80 cm" },
            { label: "Espesor material", value: "15-200 micras" },
            { label: "Capacidad diaria", value: "Hasta 50,000 unidades" },
            { label: "Energía requerida", value: "220V trifásico" }
        ]
    },
    3: {
        title: "Consultoría Técnica Especializada",
        category: "Consultoría",
        description: "Asesoría experta en empaques, materiales y procesos industriales sostenibles. Ayudamos a optimizar tu producción mediante análisis especializados y soluciones personalizadas.",
        features: [
            "Análisis completo de procesos actuales",
            "Optimización de materiales y recursos",
            "Soluciones sostenibles y ecoamigables",
            "Asesoría continua y seguimiento",
            "Capacitación del personal operativo"
        ],
        benefits: [
            "Reducción de costos operativos",
            "Mejora en eficiencia productiva",
            "Implementación de mejores prácticas",
            "Cumplimiento normativo",
            "Innovación continua"
        ],
        specs: [
            { label: "Duración consultoría", value: "1-12 meses" },
            { label: "Equipo consultor", value: "3-5 especialistas" },
            { label: "Reportes entregables", value: "Semanal/Mensual" },
            { label: "Metodología", value: "Lean Manufacturing" },
            { label: "Herramientas utilizadas", value: "Análisis DMAIC, Value Stream" },
            { label: "Certificación", value: "Reporte final con mejoras" }
        ]
    },
    4: {
        title: "Empaques para Productos Especiales",
        category: "Empaques",
        description: "Soluciones de empaque para productos que requieren condiciones especiales de protección y conservación, incluyendo barreras contra humedad, oxígeno y control de temperatura.",
        features: [
            "Protección avanzada contra humedad",
            "Barrera efectiva contra oxígeno",
            "Empaques estériles para uso médico",
            "Control preciso de temperatura",
            "Materiales de grado alimenticio"
        ],
        benefits: [
            "Larga vida de anaquel",
            "Protección contra contaminación",
            "Mantenimiento de propiedades",
            "Cumplimiento sanitario",
            "Seguridad del consumidor"
        ],
        specs: [
            { label: "Barrera humedad", value: "WVTR < 0.1 g/m²/día" },
            { label: "Barrera oxígeno", value: "OTR < 1 cm³/m²/día" },
            { label: "Rango temperatura", value: "-60°C a 150°C" },
            { label: "Certificaciones", value: "FDA, ISO 13485" },
            { label: "Aplicaciones", value: "Alimentos, farmacéutico, médico" },
            { label: "Estéril hasta", value: "24 meses" }
        ]
    },
    5: {
        title: "Mantenimiento de Maquinaria",
        category: "Maquinado",
        description: "Servicios especializados de mantenimiento preventivo y correctivo para equipos de empaque y maquinaria industrial, garantizando máxima disponibilidad y eficiencia.",
        features: [
            "Mantenimiento preventivo programado",
            "Reparaciones especializadas en sitio",
            "Refacciones originales garantizadas",
            "Servicio de emergencia 24/7",
            "Diagnóstico por telemetría"
        ],
        benefits: [
            "Máxima disponibilidad de equipo",
            "Reducción de paros no programados",
            "Extensión de vida útil de maquinaria",
            "Optimización del rendimiento",
            "Cumplimiento de garantías"
        ],
        specs: [
            { label: "Tiempo respuesta", value: "4-24 horas" },
            { label: "Cobertura", value: "Nacional" },
            { label: "Técnicos certificados", value: "15+ especialistas" },
            { label: "Garantía reparación", value: "90 días" },
            { label: "Soporte remoto", value: "24/7" },
            { label: "Contratos", value: "Anuales o por evento" }
        ]
    },
    6: {
        title: "Optimización de Procesos",
        category: "Consultoría",
        description: "Mejoramos la eficiencia de tus líneas de producción mediante análisis especializado, implementación de mejoras y capacitación del personal para maximizar resultados.",
        features: [
            "Análisis detallado de eficiencia",
            "Reducción de mermas y desperdicios",
            "Programas de mejora continua",
            "Capacitación del personal operativo",
            "Implementación de KPIs"
        ],
        benefits: [
            "Aumento de productividad",
            "Reducción de costos",
            "Mejora en calidad del producto",
            "Optimización de recursos",
            "Sostenibilidad operativa"
        ],
        specs: [
            { label: "Metodología", value: "Lean Six Sigma" },
            { label: "Duración proyecto", value: "3-9 meses" },
            { label: "ROI esperado", value: "15-40%" },
            { label: "Reducción mermas", value: "Hasta 30%" },
            { label: "Mejora eficiencia", value: "20-50%" },
            { label: "Certificación", value: "Reporte de resultados" }
        ]
    }
};

// JavaScript principal MODIFICADO
document.addEventListener('DOMContentLoaded', function() {
    // Elementos del modal (SOLO LOS NECESARIOS PARA TEXTO)
    const modal = document.getElementById('serviceModal');
    const modalClose = document.getElementById('modalClose');
    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalDescription = document.getElementById('modalDescription');
    const modalFeatures = document.getElementById('modalFeatures');
    const modalBenefits = document.getElementById('modalBenefits');
    const modalSpecs = document.getElementById('modalSpecs');
    
    // Función para abrir el modal (MODIFICADA - SIN IMAGEN)
    function openModal(serviceId) {
        const service = serviciosData[serviceId];
        if (!service) return;
        
        // Llenar datos del modal
        modalTitle.textContent = service.title;
        modalCategory.textContent = service.category;
        modalDescription.textContent = service.description;
        
        // Limpiar y agregar características
        modalFeatures.innerHTML = '';
        service.features.forEach(feature => {
            const li = document.createElement('li');
            li.textContent = feature;
            modalFeatures.appendChild(li);
        });
        
        // Limpiar y agregar beneficios
        modalBenefits.innerHTML = '';
        service.benefits.forEach(benefit => {
            const li = document.createElement('li');
            li.textContent = benefit;
            modalBenefits.appendChild(li);
        });
        
        // Limpiar y agregar especificaciones
        modalSpecs.innerHTML = '';
        service.specs.forEach(spec => {
            const div = document.createElement('div');
            div.className = 'spec-item';
            div.innerHTML = `
                <span class="spec-label">${spec.label}</span>
                <span class="spec-value">${spec.value}</span>
            `;
            modalSpecs.appendChild(div);
        });
        
        // Mostrar modal directamente
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevenir scroll
    }
    
    // Función para cerrar el modal
    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = ''; // Restaurar scroll
    }
    
    // Asignar eventos a los botones de servicio - ABRE MODAL DIRECTAMENTE
    document.querySelectorAll('.servicio-boton').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const serviceId = this.getAttribute('data-service');
            openModal(serviceId); // Abre directamente el modal
        });
    });
    
    // Eventos para cerrar el modal
    modalClose.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    // Crear elementos flotantes para el hero
    const floatingContainer = document.getElementById('floatingElements');
    if (floatingContainer) {
        const elements = ['🔧', '⚙️', '📦', '🏭', '💼', '🚀', '✨', '🎯'];
        
        for (let i = 0; i < 15; i++) {
            const element = document.createElement('div');
            element.className = 'floating-element';
            element.textContent = elements[Math.floor(Math.random() * elements.length)];
            element.style.left = `${Math.random() * 100}%`;
            element.style.animationDelay = `${Math.random() * 15}s`;
            element.style.fontSize = `${Math.random() * 12 + 16}px`;
            floatingContainer.appendChild(element);
        }
    }
    
    // Filtrado de servicios
    const filterButtons = document.querySelectorAll('.filtro-btn');
    const serviceItems = document.querySelectorAll('.servicio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Quitar clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Agregar clase active al botón clickeado
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            // Filtrar servicios
            serviceItems.forEach(item => {
                if (filter === 'todos' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Efecto hover en tarjetas de servicio
    serviceItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });
    
    // Animación de números en estadísticas
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(number => {
        const target = parseInt(number.textContent);
        let current = 0;
        const increment = target / 50;
        const interval = setInterval(() => {
            current += increment;
            if (current >= target) {
                clearInterval(interval);
                current = target;
            }
            number.textContent = Math.floor(current);
        }, 50);
    });
    
    // Efecto de scroll para elementos
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, observerOptions);
    
    // Observar elementos para animaciones
    const animatedElements = document.querySelectorAll('.servicio-item, .hero-stat-item');
    animatedElements.forEach(el => observer.observe(el));
    
    // Efecto de paralaje en video
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const videoCol = document.querySelector('.hero-video-col');
        if (videoCol) {
            const rate = scrolled * 0.3;
            videoCol.style.transform = `translateY(${rate}px)`;
        }
    });
});