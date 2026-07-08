<?php
// admin/dashboard.php
require_once __DIR__ . '/../config/config.php';

// Verificar autenticación
if (!isLoggedIn()) {
    redirect('login.php');
}

// Obtener estadísticas
$pdo = Database::connect();
$stats = [
    'total' => 0,
    'nuevos' => 0,
    'hoy' => 0,
    'pendientes' => 0
];

if ($pdo) {
    try {
        $stmt = $pdo->query("SELECT COUNT(*) as total FROM tickets");
        $stats['total'] = $stmt->fetch()['total'];
        
        $stmt = $pdo->query("SELECT COUNT(*) as nuevos FROM tickets WHERE estado = 'nuevo'");
        $stats['nuevos'] = $stmt->fetch()['nuevos'];
        
        $stmt = $pdo->query("SELECT COUNT(*) as hoy FROM tickets WHERE DATE(fecha_creacion) = CURDATE()");
        $stats['hoy'] = $stmt->fetch()['hoy'];
        
        $stmt = $pdo->query("SELECT COUNT(*) as pendientes FROM tickets WHERE estado IN ('nuevo', 'en_proceso')");
        $stats['pendientes'] = $stmt->fetch()['pendientes'];
    } catch (Exception $e) {
        // Silenciar error
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AGSAPACK Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #00AEEF;
            --secondary: #0074D9;
        }
        
        body {
            background: #f5f5f5;
        }
        
        .sidebar {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: white;
            min-height: 100vh;
            position: fixed;
            width: 250px;
        }
        
        .sidebar-header {
            padding: 30px 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .admin-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 5px 10px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .nav-link:hover, .nav-link.active {
            background: rgba(0, 174, 239, 0.2);
            color: white;
        }
        
        .nav-link i {
            width: 20px;
            margin-right: 10px;
        }
        
        .badge-notify {
            background: var(--primary);
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 12px;
            margin-left: auto;
        }
        
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
            border-left: 4px solid var(--primary);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin-bottom: 15px;
        }
        
        .icon-total { background: linear-gradient(135deg, #00AEEF, #0074D9); }
        .icon-nuevos { background: linear-gradient(135deg, #FF416C, #FF4B2B); }
        .icon-hoy { background: linear-gradient(135deg, #28a745, #20c997); }
        .icon-pendientes { background: linear-gradient(135deg, #ffc107, #ff9800); }
        
        .table-custom {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .badge-estado {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .badge-nuevo { background: #d4edda; color: #155724; }
        .badge-en_proceso { background: #fff3cd; color: #856404; }
        .badge-respondido { background: #d1ecf1; color: #0c5460; }
        .badge-cerrado { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="admin-logo">
                <i class="fas fa-cogs"></i>
            </div>
            <h5>AGSAPACK</h5>
            <small class="text-muted">Panel de Control</small>
        </div>
        
        <div class="nav flex-column mt-3">
            <a href="dashboard.php" class="nav-link active">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="tickets.php" class="nav-link">
                <i class="fas fa-ticket-alt"></i> Tickets
                <?php if ($stats['nuevos'] > 0): ?>
                <span class="badge-notify"><?php echo $stats['nuevos']; ?></span>
                <?php endif; ?>
            </a>
            <a href="../contacto.php" target="_blank" class="nav-link">
                <i class="fas fa-external-link-alt"></i> Ver Sitio Web
            </a>
            <a href="logout.php" class="nav-link">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>
        
        <div class="sidebar-footer position-absolute bottom-0 w-100 p-3">
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <i class="fas fa-user-circle fa-2x"></i>
                </div>
                <div>
                    <small>Conectado como</small><br>
                    <strong><?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin'); ?></strong>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contenido Principal -->
    <div class="main-content">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 mb-0">Dashboard</h1>
                <p class="text-muted mb-0">Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Administrador'); ?></p>
            </div>
            <a href="../contacto.php" target="_blank" class="btn btn-primary">
                <i class="fas fa-eye me-2"></i> Ver Sitio Web
            </a>
        </div>
        
        <!-- Estadísticas -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon icon-total">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <div class="stat-number"><?php echo $stats['total']; ?></div>
                    <div class="text-muted">Tickets Totales</div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon icon-nuevos">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-number"><?php echo $stats['nuevos']; ?></div>
                    <div class="text-muted">Nuevos</div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon icon-hoy">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="stat-number"><?php echo $stats['hoy']; ?></div>
                    <div class="text-muted">Hoy</div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon icon-pendientes">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-number"><?php echo $stats['pendientes']; ?></div>
                    <div class="text-muted">Pendientes</div>
                </div>
            </div>
        </div>
        
        <!-- Tickets Recientes -->
        <div class="card table-custom">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tickets Recientes</h5>
                <a href="tickets.php" class="btn btn-sm btn-primary">Ver Todos</a>
            </div>
            <div class="card-body p-0">
                <?php
                if ($pdo) {
                    try {
                        $stmt = $pdo->query("
                            SELECT id_ticket, nombre, email, asunto, estado, fecha_creacion 
                            FROM tickets 
                            ORDER BY fecha_creacion DESC 
                            LIMIT 8
                        ");
                        $tickets = $stmt->fetchAll();
                        
                        if (empty($tickets)): ?>
                            <div class="text-center py-5">
                                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No hay tickets registrados</p>
                            </div>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cliente</th>
                                            <th>Asunto</th>
                                            <th>Estado</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tickets as $ticket): 
                                            $badge_class = 'badge-' . str_replace('_', '', $ticket['estado']);
                                        ?>
                                        <tr>
                                            <td>#<?php echo $ticket['id_ticket']; ?></td>
                                            <td>
                                                <div><?php echo htmlspecialchars($ticket['nombre']); ?></div>
                                                <small class="text-muted"><?php echo htmlspecialchars($ticket['email']); ?></small>
                                            </td>
                                            <td><?php echo htmlspecialchars($ticket['asunto']); ?></td>
                                            <td>
                                                <span class="badge-estado <?php echo $badge_class; ?>">
                                                    <?php echo $ticket['estado']; ?>
                                                </span>
                                            </td>
                                            <td><?php echo date('d/m/Y H:i', strtotime($ticket['fecha_creacion'])); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif;
                    } catch (Exception $e) {
                        echo '<div class="alert alert-danger m-3">Error al cargar tickets</div>';
                    }
                }
                ?>
            </div>
        </div>
        
        <!-- Acciones Rápidas -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Acciones Rápidas</h5>
                        <div class="d-grid gap-2">
                            <a href="tickets.php?estado=nuevo" class="btn btn-outline-primary">
                                <i class="fas fa-eye me-2"></i> Ver Tickets Nuevos
                            </a>
                            <a href="../contacto.php" target="_blank" class="btn btn-outline-success">
                                <i class="fas fa-plus me-2"></i> Probar Formulario
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del Sistema</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-server text-primary me-2"></i> Base de datos: <?php echo $stats['total']; ?> tickets</li>
                            <li><i class="fas fa-user text-success me-2"></i> Usuario: <?php echo $_SESSION['user_name'] ?? 'Admin'; ?></li>
                            <li><i class="fas fa-clock text-warning me-2"></i> Último acceso: <?php echo date('d/m/Y H:i'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Animación simple
        document.addEventListener('DOMContentLoaded', function() {
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>