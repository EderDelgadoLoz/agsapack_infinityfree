<?php
require_once __DIR__ . '/../config/config.php';

// admin/logout.php
session_start();
session_destroy();
header('Location: login.php');
exit;
?>