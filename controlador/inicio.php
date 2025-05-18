<?php
require_once __DIR__ . '/../config/Conexion.php';  // Ruta a tu clase de conexión
session_start();

header('Content-Type: application/json');

$nombre = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

if (empty($nombre) || empty($clave)) {
    echo json_encode(['success' => false, 'message' => 'Campos vacíos']);
    exit;
}

try {
    $conn = Conexion::conectar(); // Obtenemos PDO

    // Consulta preparada para evitar inyección SQL
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombre = :nombre AND contraseña = :clave");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':clave', $clave);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['usuario'] = $nombre;
        echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
}
?>
