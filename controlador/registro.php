<?php
// Registro.php - controlador

require_once __DIR__ . '/../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre     = $_POST['nombre'] ?? '';
    $apellido   = $_POST['apellido'] ?? '';
    $birth      = $_POST['birth'] ?? '';
    $correo     = $_POST['correo'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $confirmar  = $_POST['confirmar'] ?? '';

    // Validar que las contraseñas coincidan
    if ($contraseña !== $confirmar) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    try {
        // Conectar a la base de datos
        $db = Conexion::conectar();

        // Validar que el correo no esté registrado
        $stmt = $db->prepare("SELECT id FROM usuarios WHERE correo = :correo");
        $stmt->execute([':correo' => $correo]);
        if ($stmt->fetch()) {
            echo "Este correo ya está registrado.";
            exit;
        }

        // Insertar nuevo usuario 
        $stmt = $db->prepare("INSERT INTO usuarios (nombre, apellido, birth, correo, contraseña) 
                              VALUES (:nombre, :apellido, :birth, :correo, :contraseña)");
        $stmt->execute([
            ':nombre'     => $nombre,
            ':apellido'   => $apellido,
            ':birth'      => $birth,
            ':correo'     => $correo,
            ':contraseña' => $contraseña
        ]);

        // Redirigir al index al finalizar
        header("Location: ../index.php");
        exit;

    } catch (PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit;
    }
} else {
    echo "Acceso no válido.";
    exit;
}
?>
