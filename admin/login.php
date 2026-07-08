<?php
// admin/login.php
require_once __DIR__ . '/../config/config.php';

// Si ya está logueado, redirigir al dashboard
if (isLoggedIn()) {
    redirect('dashboard.php');
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = sanitize($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = 'Todos los campos son requeridos';
    } else {
        try {
            $pdo = Database::connect();
            if ($pdo) {
                $sql = "SELECT id_usuario, nombre, email, password, es_admin 
                        FROM usuarios 
                        WHERE email = :email AND es_admin = 1";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['email' => $email]);
                $usuario = $stmt->fetch();
                
                if ($usuario && password_verify($password, $usuario['password'])) {
                    // Iniciar sesión
                    $_SESSION['user_id'] = $usuario['id_usuario'];
                    $_SESSION['user_name'] = $usuario['nombre'];
                    $_SESSION['user_email'] = $usuario['email'];
                    $_SESSION['es_admin'] = true;
                    
                    redirect('dashboard.php');
                } else {
                    $error = 'Credenciales incorrectas';
                }
            } else {
                $error = 'Error de conexión a la base de datos';
            }
        } catch (Exception $e) {
            $error = 'Error del sistema';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - AGSAPACK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-box {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        
        .logo-login {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo-login h2 {
            color: #00AEEF;
            font-weight: 700;
        }
        
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
        }
        
        .btn-login {
            background: linear-gradient(135deg, #00AEEF 0%, #0074D9 100%);
            border: none;
            padding: 12px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            width: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 174, 239, 0.3);
        }
        
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo-login">
            <h2><i class="fas fa-cogs"></i> AGSAPACK</h2>
            <p class="text-muted">Panel de Administración</p>
        </div>
        
        <?php if ($error): ?>
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-triangle me-2"></i> <?php echo $error; ?>
        </div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required 
                       placeholder="admin@agsapack.com" value="<?php echo $_POST['email'] ?? ''; ?>">
            </div>
            
            <div class="mb-4">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" required 
                       placeholder="••••••••">
            </div>
            
            <button type="submit" class="btn btn-login">
                <i class="fas fa-sign-in-alt me-2"></i> Iniciar Sesión
            </button>
        </form>
        
        <div class="back-link">
            <a href="../contacto.php" class="text-decoration-none">
                <i class="fas fa-arrow-left me-1"></i> Volver al sitio
            </a>
        </div>
        
        <div class="mt-4 text-center text-muted small">
            <p>Credenciales por defecto:<br>
            Email: admin@agsapack.com<br>
            Contraseña: Admin1234</p>
        </div>
    </div>
    
    <script>
        // Efecto simple
        document.querySelector('form').addEventListener('submit', function() {
            this.querySelector('button').innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Verificando...';
        });
    </script>
</body>
</html>