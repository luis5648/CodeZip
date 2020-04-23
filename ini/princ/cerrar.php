<?php
// Inicializar la sesión.
session_start();
// Destruir todas las variables de sesión.
$_SESSION = array();

// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// Destruir la sesión.
session_destroy();
// Volver al inicio
header("Location:../../index.html");
?>
