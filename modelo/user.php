<?php
session_start();

// Verificar si hay sesión activa
$response = ['loggedIn' => false];

if (isset($_SESSION['usuario'])) {
    $response = [
        'loggedIn' => true,
        'nombre' => htmlspecialchars($_SESSION['usuario'])
    ];
}

// Enviar respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>