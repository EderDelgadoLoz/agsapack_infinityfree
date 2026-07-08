

/* === Extraído de contacto.php === */
';
                    echo 'document.addEventListener("DOMContentLoaded", function() {';
                    $fields = ['nombre', 'email', 'telefono', 'empresa', 'asunto', 'mensaje'];
                    foreach ($fields as $field) {
                        if (isset($_SESSION['datos_formulario'][$field])) {
                            $value = addslashes($_SESSION['datos_formulario'][$field]);
                            echo 'if (document.getElementById("' . $field . '")) {';
                            echo 'document.getElementById("' . $field . '").value = "' . $value . '";';
                            echo '}';
                        }
                    }
                    
                    
                    if (isset($_SESSION['datos_formulario']['asunto'])) {
                        $asuntoValue = $_SESSION['datos_formulario']['asunto'];
                        echo 'if (document.getElementById("asunto")) {';
                        echo 'document.getElementById("asunto").value = "' . addslashes($asuntoValue) . '";';
                        echo '}';
                    }
                    
                    echo '});';
                    echo '

/* === Extraído de contacto.php (bloque 2) === */
document.addEventListener('DOMContentLoaded', function() {
    console.log("📄 Página cargada correctamente");
    
    // 1. Efectos visuales
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = (index * 0.1) + 's';
        group.style.animationPlayState = 'running';
    });
    
    // 2. Efectos hover para botones
    const buttons = document.querySelectorAll('.btn-ticket, .btn-admin, .btn-success');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s';
        });
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // 3. Configurar validación del formulario principal
    const formPrincipal = document.getElementById('contactForm');
    if (formPrincipal) {
        console.log("✅ Formulario principal encontrado");
        
        formPrincipal.addEventListener('submit', function(event) {
            console.log("🎯 Formulario principal siendo enviado...");
            
            // Verificar checkbox de privacidad
            const privacidad = document.getElementById('privacidad');
            if (!privacidad.checked) {
                event.preventDefault();
                alert('⚠️ Debes aceptar la política de privacidad para enviar el formulario.');
                privacidad.focus();
                privacidad.style.outline = '2px solid red';
                return false;
            }
            
            // Verificar campos requeridos
            const camposRequeridos = ['nombre', 'email', 'asunto', 'mensaje'];
            let hayError = false;
            
            camposRequeridos.forEach(campoId => {
                const campo = document.getElementById(campoId);
                if (campo && !campo.value.trim()) {
                    hayError = true;
                    campo.style.borderColor = 'red';
                }
            });
            
            if (hayError) {
                event.preventDefault();
                alert('❌ Por favor, completa todos los campos requeridos (*).');
                return false;
            }
            
            // Validar email
            const email = document.getElementById('email').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                event.preventDefault();
                alert('❌ Por favor, ingresa un correo electrónico válido.');
                document.getElementById('email').focus();
                return false;
            }
            
            // Si todo está bien, mostrar loading
            console.log("✅ Validación exitosa, mostrando loading...");
            const submitBtns = this.querySelectorAll('button[type="submit"]');
            submitBtns.forEach(btn => {
                btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Enviando...';
                btn.disabled = true;
            });
            
            // El formulario se enviará automáticamente
            return true;
        });
    }
    
    // 4. Configurar formulario de respaldo para copiar datos automáticamente
    const campos = ['nombre', 'email', 'telefono', 'empresa', 'asunto', 'mensaje'];
    campos.forEach(campo => {
        const elemento = document.getElementById(campo);
        if (elemento) {
            elemento.addEventListener('input', function() {
                const campoRespaldo = document.getElementById('respaldo' + campo.charAt(0).toUpperCase() + campo.slice(1));
                if (campoRespaldo) {
                    campoRespaldo.value = this.value;
                }
            });
        }
    });
    
    // 5. Efectos de focus en campos
    const inputs = document.querySelectorAll('.form-control-custom');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.boxShadow = '0 0 0 3px rgba(0, 174, 239, 0.2)';
            this.style.borderColor = '#00AEEF';
        });
        input.addEventListener('blur', function() {
            this.style.boxShadow = 'none';
            if (this.value.trim()) {
                this.style.borderColor = '#28a745';
            } else {
                this.style.borderColor = '#e0e0e0';
            }
        });
        
        // Validación en tiempo real
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.style.borderColor = '#28a745';
            } else if (this.required) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '#e0e0e0';
            }
        });
    });
    
    // 6. Configurar checkbox
    const checkboxPrivacidad = document.getElementById('privacidad');
    if (checkboxPrivacidad) {
        checkboxPrivacidad.addEventListener('change', function() {
            if (this.checked) {
                this.style.outline = 'none';
            }
        });
    }
    
    console.log("✅ Script configurado correctamente");
    console.log("📝 Formularios encontrados:");
    console.log("- Principal:", document.getElementById('contactForm') ? '✅ Sí' : '❌ No');
    console.log("- Respaldo:", document.getElementById('formRespaldo') ? '✅ Sí' : '❌ No');
});



/
</div>
<script src="assets/js/contacto.js">