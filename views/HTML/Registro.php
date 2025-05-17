<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title> <!-- Título que aparece en la pestaña del navegador -->
    
    <!-- Enlace al archivo CSS que da estilo a la página de registro -->
    <link rel="stylesheet" href="../CSS/StyleRegistro.css">

</head>

<body>

    <!-- Formulario de registro que envía los datos a un script PHP (controlador/registro.php) -->
    <form action="controlador/registro.php" method="POST">
        
        <!-- Campo para el nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <!-- Campo para el apellido -->
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <!-- Campo para la fecha de nacimiento -->
        <label for="birth">Fecha de nacimiento:</label>
        <input type="date" id="birth" name="birth" required><br>

        <!-- Campo para el correo electrónico -->
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br>

        <!-- Campo para la contraseña -->
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>

        <!-- Campo para confirmar la contraseña -->
        <label for="confirmar">Confirme la Contraseña:</label>
        <input type="password" id="confirmar" name="confirmar" required><br>

        <!-- Botón de envío del formulario -->
        <button type="submit">Registrarse</button>
    </form>

    <!-- Enlace para usuarios que ya tienen cuenta -->
    <p>¿Ya tienes una cuenta? <a href="iniciyoregis.php">Inicia sesión</a></p>

    <!-- Imagen del logo de la página -->
    <img src="imagenes/rendix logo.png" alt="rendix">

    <!-- Pie de página con información de contacto y redes sociales -->
    <footer id="contacto">
        <p>Contacto: rendix@hotmail.com</p>
        <p>Redes sociales: 
            <a href="#" class="social-link">
                <img src="imagenes/linkedin.png" alt="LinkedIn" class="social-icon"> 
            </a>  
            <a href="#" class="social-link">
                <img src="imagenes/github.png" alt="GitHub" class="social-icon">
            </a>  
        </p>
    </footer>

    <!-- Script adicional (si contiene funciones JS para validación o mejoras visuales) -->
    <script src="JS/iniciarsesion.js"></script>
</body>
</html>
