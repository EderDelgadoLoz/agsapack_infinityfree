<?php

session_start();


error_reporting(0);
ini_set('display_errors', 0);


require_once __DIR__ . '/config/config.php';


function conectarBD() {
    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        
        error_log("Error de conexión BD: " . $e->getMessage());
        return null;
    }
}


function verificarTablaTickets($pdo) {
    try {
        
        $stmt = $pdo->query("SHOW TABLES LIKE 'tickets'");
        if (!$stmt->fetch()) {
            
            $sql = "CREATE TABLE tickets (
                id INT PRIMARY KEY AUTO_INCREMENT,
                nombre VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                telefono VARCHAR(20),
                empresa VARCHAR(100),
                asunto VARCHAR(100) NOT NULL,
                mensaje TEXT NOT NULL,
                estado VARCHAR(20) DEFAULT 'pendiente',
                fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            $pdo->exec($sql);
            return true;
        }
        return true;
    } catch (PDOException $e) {
        error_log("Error al verificar tabla: " . $e->getMessage());
        return false;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $datos = [
        'nombre' => trim($_POST['nombre'] ?? ''),
        'email' => trim($_POST['email'] ?? ''),
        'telefono' => trim($_POST['telefono'] ?? ''),
        'empresa' => trim($_POST['empresa'] ?? ''),
        'asunto' => trim($_POST['asunto'] ?? ''),
        'mensaje' => trim($_POST['mensaje'] ?? '')
    ];
    
    
    $errores = [];
    
    if (empty($datos['nombre'])) {
        $errores[] = 'El nombre es requerido';
    }
    
    if (empty($datos['email'])) {
        $errores[] = 'El email es requerido';
    } elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'El email no es válido';
    }
    
    if (empty($datos['asunto'])) {
        $errores[] = 'El asunto es requerido';
    }
    
    if (empty($datos['mensaje'])) {
        $errores[] = 'El mensaje es requerido';
    }
    
    if (!isset($_POST['privacidad'])) {
        $errores[] = 'Debes aceptar la política de privacidad';
    }
    
    
    if (!empty($errores)) {
        $_SESSION['ticket_message'] = "❌ Errores:<br>" . implode("<br>", $errores);
        $_SESSION['ticket_message_type'] = 'error';
        header('Location: contacto.php');
        exit();
    }
    
    
    $pdo = conectarBD();
    
    if ($pdo) {
        try {
            
            verificarTablaTickets($pdo);
            
          
            $sql = "INSERT INTO tickets (nombre, email, telefono, empresa, asunto, mensaje, estado) 
                    VALUES (:nombre, :email, :telefono, :empresa, :asunto, :mensaje, 'pendiente')";
            
            $stmt = $pdo->prepare($sql);
            
           
            if ($stmt->execute($datos)) {
                $id = $pdo->lastInsertId();
                
                
                $numero_ticket = "TKT-" . date('Ymd') . "-" . str_pad($id, 4, '0', STR_PAD_LEFT);
                
                
                try {
                    $pdo->exec("ALTER TABLE tickets ADD COLUMN IF NOT EXISTS numero_ticket VARCHAR(50)");
                    $updateSql = "UPDATE tickets SET numero_ticket = :ticket WHERE id = :id";
                    $updateStmt = $pdo->prepare($updateSql);
                    $updateStmt->execute(['ticket' => $numero_ticket, 'id' => $id]);
                } catch (PDOException $updateError) {
                    
                    error_log("No se pudo agregar numero_ticket: " . $updateError->getMessage());
                }
                
             
                $_SESSION['ticket_message'] = "✅ ¡Consulta enviada con éxito!<br>Número de referencia: <strong>$numero_ticket</strong>";
                $_SESSION['ticket_message_type'] = 'success';
                $_SESSION['ultimo_ticket'] = $numero_ticket;
                
            } else {
                throw new Exception("No se pudo insertar el registro");
            }
            
        } catch (PDOException $e) {
            
            $mensajeError = "⚠️ Error al guardar en la base de datos: ";
            
          
            if (strpos($e->getMessage(), 'Column not found') !== false) {
                $mensajeError .= "Problema con la estructura de la tabla. Se intentará reparar automáticamente.";
                
                
                try {
                    $pdo->exec("DROP TABLE IF EXISTS tickets");
                    $pdo->exec("CREATE TABLE tickets (
                        id INT PRIMARY KEY AUTO_INCREMENT,
                        nombre VARCHAR(100) NOT NULL,
                        email VARCHAR(100) NOT NULL,
                        telefono VARCHAR(20),
                        empresa VARCHAR(100),
                        asunto VARCHAR(100) NOT NULL,
                        mensaje TEXT NOT NULL,
                        estado VARCHAR(20) DEFAULT 'pendiente',
                        fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    )");
                    
                    
                    $stmt = $pdo->prepare($sql);
                    if ($stmt->execute($datos)) {
                        $id = $pdo->lastInsertId();
                        $numero_ticket = "TKT-" . date('Ymd') . "-" . str_pad($id, 4, '0', STR_PAD_LEFT);
                        $_SESSION['ticket_message'] = "✅ ¡Consulta enviada con éxito!<br>Número de referencia: <strong>$numero_ticket</strong>";
                        $_SESSION['ticket_message_type'] = 'success';
                    } else {
                        throw new Exception("No se pudo insertar después de reparar");
                    }
                    
                } catch (PDOException $e2) {
                    $mensajeError .= "<br>Error al reparar: " . $e2->getMessage();
                    $_SESSION['ticket_message'] = $mensajeError;
                    $_SESSION['ticket_message_type'] = 'error';
                }
                
            } else {
                $mensajeError .= $e->getMessage();
                $_SESSION['ticket_message'] = $mensajeError;
                $_SESSION['ticket_message_type'] = 'error';
            }
            
            
            $_SESSION['datos_formulario'] = $_POST;
            
        } finally {
            
            $pdo = null;
        }
        
    } else {
        
        $_SESSION['ticket_message'] = "⚠️ No se pudo conectar a la base de datos, pero el formulario fue recibido.";
        $_SESSION['ticket_message_type'] = 'warning';
        
       
        $_SESSION['ticket_pendiente'] = $datos;
    }
    
} else {
   
    $_SESSION['ticket_message'] = "❌ Acceso incorrecto. Usa el formulario de contacto.";
    $_SESSION['ticket_message_type'] = 'error';
}


header('Location: contacto.php');
exit();
?>