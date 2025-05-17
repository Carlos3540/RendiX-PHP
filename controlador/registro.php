<?php
include("conexion.php"); // Asegúrate de que este archivo cree correctamente $conn (MySQLi)

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$birth = $_POST['birth'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$confirmar = $_POST['confirmar'];

// Validación: contraseñas iguales
if ($contraseña !== $confirmar) {
    echo "Las contraseñas no coinciden.";
    exit;
}

// Validación: correo no repetido
$check = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
$check->bind_param("s", $correo);
$check->execute();
$check->store_result();
if ($check->num_rows > 0) {
    echo "Este correo ya está registrado.";
    exit;
}
$check->close();

// Insertar datos sin encriptar contraseña
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, birth, correo, contraseña) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nombre, $apellido, $birth, $correo, $contraseña);

if ($stmt->execute()) {
    // Redirigir al index en caso de éxito
    header("Location: ../index.php");
    exit;
} else {
    echo "Error al registrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
