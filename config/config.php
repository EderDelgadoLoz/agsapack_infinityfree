<?php
// config/config.php
if (session_status() === PHP_SESSION_NONE) session_start();

// =============================================
// CAMBIA ESTOS DATOS CON LOS DE TU CUENTA
// EN INFINITYFREE (Panel de Control > MySQL)
// =============================================
define("DB_HOST", "sql200.infinityfree.com"); // Cambia por tu host MySQL de InfinityFree
define("DB_NAME", "epiz_XXXXXXX_agsapack");   // Cambia por tu nombre de BD
define("DB_USER", "epiz_XXXXXXX");             // Cambia por tu usuario MySQL
define("DB_PASS", "tu_password_aqui");          // Cambia por tu contraseña

define("BASE_URL", "/");
define("ADMIN_URL", BASE_URL . "admin/");

function isLoggedIn() { return isset($_SESSION["es_admin"]) && $_SESSION["es_admin"] === true; }
function redirect($url) { header("Location: $url"); exit; }
function sanitize($input) { return htmlspecialchars(trim($input), ENT_QUOTES, "UTF-8"); }
