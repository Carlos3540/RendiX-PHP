<?php
include("conexion.php");

session_start();

$nombre = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

if (empty($nombre) || empty($clave)) {
    echo json_encode(['success' => false, 'message' => 'Campos vacíos']);
    exit;
}

$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contraseña = '$clave'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['usuario'] = $nombre;
    echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso']);
} else {
    echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
}

mysqli_close($conn);
?>