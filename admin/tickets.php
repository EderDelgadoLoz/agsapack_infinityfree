<?php
// admin/tickets.php
require_once __DIR__ . '/../config/config.php';

// Verificar autenticación
if (!isLoggedIn()) {
    redirect('login.php');
}

$pdo = Database::connect();

// Manejar cambio de estado
if (isset($_POST['cambiar_estado']) && isset($_POST['id_ticket']) && isset($_POST['nuevo_estado'])) {
    try {
        $sql = "UPDATE tickets SET estado = :estado WHERE id_ticket = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'estado' => $_POST['nuevo_estado'],
            'id' => $_POST['id_ticket']
        ]);
        
        $_SESSION['ticket_message'] = '✅ Estado actualizado correctamente';
        $_SESSION['ticket_message_type'] = 'success';
        redirect('tickets.php');
    } catch (Exception $e) {
        $_SESSION['ticket_message'] = '❌ Error al actualizar estado';
        $_SESSION['ticket_message_type'] = 'error';
    }
}

// Filtrar por estado
$estado_filtro = $_GET['estado'] ?? '';
$where = '';
$params = [];

if ($estado_filtro && in_array($estado_filtro, ['nuevo', 'en_proceso', 'respondido', 'cerrado'])) {
    $where = "WHERE estado = :estado";
    $params['estado'] = $estado_filtro;
}

// Obtener tickets
$tickets = [];
if ($pdo) {
    try {
        $sql = "SELECT * FROM tickets $where ORDER BY fecha_creacion DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $tickets = $stmt->fetchAll();
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
    <title>Tickets - AGSAPACK Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
        
        .ticket-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: all 0.3s;
        }
        
        .ticket-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .ticket-header {
            background: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
            border-radius: 10px 10px 0 0;
        }
        
        .ticket-body {
            padding: 20px;
        }
        
        .filter-badge {
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-badge.active {
            transform: scale(1.1);
            box-shadow: 0 0 0 2px #00AEEF;
        }
    </style>
</head>
<body>
    <?php require_once 'dashboard.php'; ?>
    
    <div class="main-content">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 mb-0">Gestión de Tickets</h1>
                <p class="text-muted mb-0">Total: <?php echo count($tickets); ?> tickets</p>
            </div>
            <div>
                <a href="dashboard.php" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i> Volver al Dashboard
                </a>
            </div>
        </div>
        
        <!-- Mensajes -->
        <?php if (isset($_SESSION['ticket_message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['ticket_message_type'] ?? 'success'; ?> alert-dismissible fade show">
            <?php echo $_SESSION['ticket_message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php 
        unset($_SESSION['ticket_message']);
        unset($_SESSION['ticket_message_type']);
        endif; ?>
        
        <!-- Filtros -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Filtrar por estado:</h5>
                <div class="d-flex flex-wrap gap-2">
                    <a href="tickets.php" class="btn btn-sm <?php echo empty($estado_filtro) ? 'btn-primary' : 'btn-outline-primary'; ?>">
                        Todos <span class="badge bg-light text-dark"><?php 
                        $pdo = Database::connect();
                        if ($pdo) {
                            $stmt = $pdo->query("SELECT COUNT(*) as total FROM tickets");
                            echo $stmt->fetch()['total'];
                        }
                        ?></span>
                    </a>
                    <a href="tickets.php?estado=nuevo" class="btn btn-sm <?php echo $estado_filtro == 'nuevo' ? 'btn-primary' : 'btn-outline-primary'; ?>">
                        Nuevos <span class="badge bg-light text-dark"><?php 
                        if ($pdo) {
                            $stmt = $pdo->query("SELECT COUNT(*) as total FROM tickets WHERE estado = 'nuevo'");
                            echo $stmt->fetch()['total'];
                        }
                        ?></span>
                    </a>
                    <a href="tickets.php?estado=en_proceso" class="btn btn-sm <?php echo $estado_filtro == 'en_proceso' ? 'btn-primary' : 'btn-outline-primary'; ?>">
                        En Proceso <span class="badge bg-light text-dark"><?php 
                        if ($pdo) {
                            $stmt = $pdo->query("SELECT COUNT(*) as total FROM tickets WHERE estado = 'en_proceso'");
                            echo $stmt->fetch()['total'];
                        }
                        ?></span>
                    </a>
                    <a href="tickets.php?estado=respondido" class="btn btn-sm <?php echo $estado_filtro == 'respondido' ? 'btn-primary' : 'btn-outline-primary'; ?>">
                        Respondidos <span class="badge bg-light text-dark"><?php 
                        if ($pdo) {
                            $stmt = $pdo->query("SELECT COUNT(*) as total FROM tickets WHERE estado = 'respondido'");
                            echo $stmt->fetch()['total'];
                        }
                        ?></span>
                    </a>
                    <a href="tickets.php?estado=cerrado" class="btn btn-sm <?php echo $estado_filtro == 'cerrado' ? 'btn-primary' : 'btn-outline-primary'; ?>">
                        Cerrados <span class="badge bg-light text-dark"><?php 
                        if ($pdo) {
                            $stmt = $pdo->query("SELECT COUNT(*) as total FROM tickets WHERE estado = 'cerrado'");
                            echo $stmt->fetch()['total'];
                        }
                        ?></span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Lista de Tickets -->
        <?php if (empty($tickets)): ?>
        <div class="text-center py-5">
            <i class="fas fa-inbox fa-4x text-muted mb-3"></i>
            <h4 class="text-muted">No hay tickets</h4>
            <p class="text-muted"><?php echo $estado_filtro ? "No hay tickets con estado '$estado_filtro'" : "Aún no hay tickets registrados"; ?></p>
        </div>
        <?php else: ?>
        <div class="row">
            <?php foreach ($tickets as $ticket): 
                $badge_class = 'badge-' . str_replace('_', '', $ticket['estado']);
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="ticket-card">
                    <div class="ticket-header d-flex justify-content-between align-items-center">
                        <div>
                            <strong>#<?php echo $ticket['id_ticket']; ?></strong>
                            <span class="badge-estado <?php echo $badge_class; ?> ms-2">
                                <?php echo $ticket['estado']; ?>
                            </span>
                        </div>
                        <small class="text-muted">
                            <?php echo date('d/m/Y', strtotime($ticket['fecha_creacion'])); ?>
                        </small>
                    </div>
                    
                    <div class="ticket-body">
                        <h6><?php echo htmlspecialchars($ticket['nombre']); ?></h6>
                        <p class="text-muted small mb-2">
                            <i class="fas fa-envelope me-1"></i> <?php echo htmlspecialchars($ticket['email']); ?>
                            <?php if ($ticket['telefono']): ?>
                            <br><i class="fas fa-phone me-1"></i> <?php echo htmlspecialchars($ticket['telefono']); ?>
                            <?php endif; ?>
                            <?php if ($ticket['empresa']): ?>
                            <br><i class="fas fa-building me-1"></i> <?php echo htmlspecialchars($ticket['empresa']); ?>
                            <?php endif; ?>
                        </p>
                        
                        <div class="mb-3">
                            <strong>Asunto:</strong> <?php echo htmlspecialchars($ticket['asunto']); ?>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Mensaje:</strong>
                            <p class="small"><?php echo nl2br(htmlspecialchars(substr($ticket['mensaje'], 0, 150) . (strlen($ticket['mensaje']) > 150 ? '...' : ''))); ?></p>
                        </div>
                        
                        <!-- Cambiar estado -->
                        <form method="POST" class="mt-3">
                            <input type="hidden" name="id_ticket" value="<?php echo $ticket['id_ticket']; ?>">
                            <div class="input-group input-group-sm">
                                <select class="form-select" name="nuevo_estado" required>
                                    <option value="">Cambiar estado</option>
                                    <option value="nuevo" <?php echo $ticket['estado'] == 'nuevo' ? 'selected' : ''; ?>>Nuevo</option>
                                    <option value="en_proceso" <?php echo $ticket['estado'] == 'en_proceso' ? 'selected' : ''; ?>>En Proceso</option>
                                    <option value="respondido" <?php echo $ticket['estado'] == 'respondido' ? 'selected' : ''; ?>>Respondido</option>
                                    <option value="cerrado" <?php echo $ticket['estado'] == 'cerrado' ? 'selected' : ''; ?>>Cerrado</option>
                                </select>
                                <button type="submit" name="cambiar_estado" class="btn btn-primary btn-sm">
                                    <i class="fas fa-save"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>