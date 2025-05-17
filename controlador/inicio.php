<?php
session_start();
require_once __DIR__ . '/../config/conexion.php';

// Obtener datos del formulario (usando null coalescing)
$nombre = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

// Validar campos vacíos
if (empty($nombre) || empty($clave)) {
    echo json_encode(['success' => false, 'message' => 'Campos vacíos']);
    exit;
}

try {
    // Conectar a la base de datos
    $db = Conexion::conectar();

    // Preparar consulta para evitar inyección SQL
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE nombre = :nombre AND contraseña = :clave");
    $stmt->execute([
        'nombre' => $nombre,
        'clave' => $clave
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Usuario encontrado, iniciar sesión
        $_SESSION['usuario'] = $nombre;
        echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso']);
    } else {
        // Usuario o contraseña incorrectos
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
}
