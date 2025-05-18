<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRS</title>
    <link rel="stylesheet" href="../CSS/StylePQRS.css">
</head>
<body>
<header class="rendix-header-wrapper">
  <!-- Logo -->
  <div class="rendix-nav-left">
    <img src="../IMAGENES/RENDIXblanco.png" alt="Logo" class="rendix-logo" />
  </div>

  <!-- Buscador + Menú -->
  <nav class="rendix-nav-center">
    <div class="rendix-input-container">
      <div class="rendix-shadow-input"></div>

        <span class="search-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="M21 21l-4.35-4.35"></path>
                        </svg>
                    </span>

      <input type="text" name="text" class="rendix-input-search" placeholder="Buscar Productos, Marcas o Servicios">
    </div>

    <ul class="rendix-menu">
                <li><a href="HTML/Registro.php" id="sesion-link">Regístrate/Inicia Sesión</a></li>
                <li><a href="../index.php">Productos destacados</a></li>
                <li><a href="contactenos.php">Contáctenos</a></li>
                <li class="dropdown">
                <a href="#">Más opciones</a>
                <ul class="dropdown-content">
                <li><a href="calificanos.php">Califícanos</a></li>
                <li><a href="Pagina de ayuda.php">Ayuda</a></li>
              <li><a href="PQRS.php">PQRS</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- Botón ALQUILA YA -->
  <div class="rendix-navbar-right">
    <button class="rendix-button">
      ALQUILA YA
      <svg class="rendix-cart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10
         0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zM7.16 14l.84-2h7.45c.75
         0 1.41-.41 1.75-1.03L21 4H6.21l-.94-2H1v2h2l3.6 7.59-1.35
         2.44C4.52 14.37 5.48 16 7 16h12v-2H7.16z"/>
      </svg>
    </button>
  </div>
</header>

            <h1 class="page-title">PQRS</h1>
                  <h2 class="page-title">Peticiones, Quejas, Reclamo y Sugerencias</h2>
   <hr>
   <CENTER><div class="card">
    <span class="title">Dinos tus quejas</span>
    <form class="form" id="quejaForm">

<div class="group">
      <input placeholder="‎" type="text" id="name" name="name" required>
      <label for="name">Ingresa tu nombre</label>
      </div>
  <div class="group">
      <input placeholder="‎" type="email" id="email" name="email" required="">
      <label for="email">Ingresa tu email</label>
      </div>
  <div class="group">
      <textarea placeholder="‎" id="comment" name="comment" rows="5" required=""></textarea>
      <label for="comment">Deja aqui tu queja</label>
  </div>
      <button type="submit">Enviar</button>
    </form>
            <script>
// Agrega un listener al formulario con ID 'quejaForm' para manejar el evento de envío
document.getElementById('quejaForm').addEventListener('submit', function(e) {
    // Previene el comportamiento por defecto del formulario (recargar la página)
    e.preventDefault();

    // Crea un objeto FormData con todos los datos del formulario actual
    const formData = new FormData(this);

    // Realiza una petición HTTP tipo POST al archivo PqrsController.php
    fetch('../../controlador/PqrsController.php', { 
        method: 'POST',      // Método POST para enviar datos
        body: formData       // Cuerpo de la petición: los datos del formulario
    })
    // Convierte la respuesta del servidor (esperada en formato JSON)
    .then(response => response.json())

    // Maneja la respuesta ya convertida (objeto JavaScript)
    .then(data => {
        // Si el servidor responde con success: true
        if(data.success) {
            // Muestra un mensaje de éxito al usuario
            alert('¡Gracias por tu queja! La hemos recibido correctamente.');
            // Limpia (resetea) el formulario para que quede vacío
            document.getElementById('quejaForm').reset();
        } else {
            // Si la respuesta indica fallo, muestra un mensaje de error
            alert('Hubo un error al enviar tu queja.');
        }
        
    })

    // Captura cualquier error ocurrido durante la petición fetch
    .catch(error => {
        // Muestra el error en la consola del navegador para depuración
        console.error('Error:', error);
        // Informa al usuario que ocurrió un error inesperado
        alert('Error inesperado. Inténtalo más tarde.');
    });
});

</script>

  </div></CENTER>
<pre id="result"></pre>

 <script src="../JS/VerificarSesion.js"></script>

    
</body>
</html>
