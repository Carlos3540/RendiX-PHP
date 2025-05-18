<?php
session_start(); // Inicia la sesión

require_once("../config/conexion.php"); // Ajusta la ruta si es necesario
$db = Conexion::conectar(); // Obtiene la conexión PDO

// Recoge los datos del formulario
$nombre     = $_POST['nombre'];
$apellido   = $_POST['apellido'];
$birth      = $_POST['birth'];
$correo     = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$confirmar  = $_POST['confirmar'];

// Validación: contraseñas iguales
if ($contraseña !== $confirmar) {
    echo "Las contraseñas no coinciden.";
    exit;
}

// Validación: correo no repetido
$check = $db->prepare("SELECT id FROM usuarios WHERE correo = ?");
$check->execute([$correo]);
if ($check->rowCount() > 0) {
    echo "Este correo ya está registrado.";
    exit;
}

// Insertar datos (sin encriptar la contraseña)
$stmt = $db->prepare("INSERT INTO usuarios (nombre, apellido, birth, correo, contraseña) VALUES (?, ?, ?, ?, ?)");
$success = $stmt->execute([$nombre, $apellido, $birth, $correo, $contraseña]);

if ($success) {
    $_SESSION['usuario'] = $nombre;
    header("Location: ../views/index.php"); // Redirige a la página principal
    exit;
} else {
    echo "Error al registrar: " . implode(" | ", $stmt->errorInfo());
}
?>
