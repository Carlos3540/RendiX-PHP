<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inicio de Sesión</title>

  <!-- Enlace al archivo CSS que da estilo al formulario de inicio -->
  <link rel="stylesheet" href="../CSS/StyleInicio.css">
</head>
<body>

  <!-- Fondo oscuro (overlay) con el contenedor del formulario -->
  <div class="overlay">
    <div class="login-container">

        <!-- Logo superior -->
        <img src="IMAGENES/RendiX.png" alt="Logo RendiX" class="logo">
        <h2>Iniciar Sesión</h2>
        
        <!-- Formulario de inicio de sesión que envía los datos a controlador/inicio.php -->
        <form action="controlador/inicio.php" method="POST" id="loginForm">
            <label for="usuario">Nombre:</label>
            <input type="text" id="usuario" name="usuario" class="input-field" required>

            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" class="input-field" required>

            <button type="submit" class="btn-login">Ingresar</button>
        </form>

        <!-- Enlace para ir al registro -->
        <p class="registro">¿No tienes cuenta? <a href="Registro.php">Regístrate</a></p>
    </div>
  </div>

  <!-- Mensaje flotante que se muestra tras el intento de inicio -->
  <div id="toast" class="toast"></div>

  <!-- Script para manejar el envío del formulario de forma asíncrona -->
  <script>
  // Espera a que se envíe el formulario con id 'loginForm'
  document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault(); // Previene el envío tradicional del formulario

    // Captura los datos del formulario
    const formData = new FormData(this);

    // Envía los datos al archivo PHP usando fetch (petición POST)
    const response = await fetch('controlador/inicio.php', {
      method: 'POST',
      body: formData
    });

    // Espera la respuesta del servidor en formato JSON
    const result = await response.json();

    // Muestra un mensaje tipo toast en pantalla con el resultado
    const toast = document.getElementById('toast');
    toast.textContent = result.message;
    toast.style.display = 'block';
    toast.style.backgroundColor = result.success ? 'green' : 'red'; // Verde si fue exitoso, rojo si no

    // Oculta el toast después de 3 segundos
    setTimeout(() => {
      toast.style.display = 'none';
      
      // Si el inicio de sesión fue exitoso, redirige a otra página
      if (result.success) {
        window.location.href = 'index.php'; // Cambiar URL si es necesario
      }
    }, 3000);
  });
  </script>

</body>
</html>
