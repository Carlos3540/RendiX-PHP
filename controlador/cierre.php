<?php
session_start();

// Procesar solo si es petición POST para cerrar sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();    // Limpia todas las variables de sesión
    session_destroy();  // Destruye la sesión
    echo json_encode(["loggedOut" => true]); // Confirmación en JSON
    exit;
}
?>
