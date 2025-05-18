<?php
// Inicia la sesión para poder acceder a variables de sesión si el usuario está logueado
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfil</title>
  <!-- Enlace al archivo CSS que da estilo a la página de perfil -->
<link rel="stylesheet" href="../CSS/Style_perfil.css">
</head>
<body>

  <!-- Encabezado con botón para volver atrás y título -->
  <header>
    <button class="back-btn" onclick="history.back()">← Volver</button>
    <h1>Perfil</h1>
  </header>

  <main>
    <!-- Tarjeta de perfil con nombre y correo -->
    <section class="profile-card">
      <h2 class="profile-name">Nombre</h2>
      <p class="profile-email">correo@ejemplo.com</p>
    </section>

    <!-- Sección de opciones relacionadas a la cuenta -->
    <section class="section-group">
      <h3 class="section-title">Cuenta</h3>

      <!-- Opción: Pago -->
<div class="option-card">
  <div class="option-icon dollar-icon">
    <span class="icon-placeholder">
      <img src="../IMAGENES/dollar-icon.svg" alt="dollar-icon" />
    </span>
  </div>
  <div class="option-text">Opciones de Pago</div>
  <div class="option-arrow">
    <img src="../IMAGENES/more-arrow-button.svg" alt="arrow" />
  </div>
</div>

<!-- Opción: Carrito -->
<a href="carrito.php" style="text-decoration: none;">
  <div class="option-card">
    <div class="option-icon cart-icon">
      <span class="icon-placeholder">
        <img src="../../views/IMAGENES/shopping-cart.svg" alt="carrito" />
      </span>
    </div>
    <div class="option-text">Carrito</div>
    <div class="option-arrow">
      <img src="../../views/IMAGENES/more-arrow-button.svg" alt="arrow" />
    </div>
  </div>
</a>



<!-- Opción: Notificaciones -->
<div class="option-card">
  <div class="option-icon notification-icon">
    <span class="icon-placeholder">
      <img src="../IMAGENES/notification-icon.svg" alt="notification-icon" />
    </span>
  </div>
  <div class="option-text">Notificaciones</div>
  <div class="option-arrow">
    <img src="../IMAGENES/more-arrow-button.svg" alt="arrow" />
  </div>
</div>

<!-- Opción: Perfil -->
<div class="option-card">
  <div class="option-icon user-icon">
    <span class="icon-placeholder">
      <img src="../IMAGENES/user-icon.svg" alt="user-icon" />
    </span>
  </div>
  <div class="option-text">Perfil</div>
  <div class="option-arrow">
    <img src="../IMAGENES/more-arrow-button.svg" alt="arrow" />
  </div>
</div>
</section>

<!-- Sección de opciones generales -->
<section class="section-group">
  <h3 class="section-title">General</h3>

  <!-- Opción: Soporte -->
  <div class="option-card">
    <div class="option-icon comment-icon">
      <span class="icon-placeholder">
        <img src="../IMAGENES/supoport-icon.svg" alt="soporte" />
      </span>
    </div>
    <div class="option-text">Soporte</div>
    <div class="option-arrow">
      <img src="../IMAGENES/more-arrow-button.svg" alt="arrow" />
    </div>
  </div>

  <!-- Opción: Términos de servicio -->
  <div class="option-card">
    <div class="option-icon security-icon">
      <span class="icon-placeholder">
        <img src="../IMAGENES/ToS-icon.svg" alt="ToS-icon" />
      </span>
    </div>
    <div class="option-text">Términos de Servicio</div>
    <div class="option-arrow">
      <img src="../IMAGENES/more-arrow-button.svg" alt="arrow" />
    </div>
  </div>

  
</section>




      <!-- Botón para cerrar sesión -->
      <button id="logout-btn">Cerrar Sesión</button>
    </section>
  </main>

  <!-- Script para verificar la sesión del usuario y gestionar el cierre de sesión -->
  <script>
  document.addEventListener("DOMContentLoaded", () => {
  // Verifica si el usuario tiene sesión activa consultando el archivo PHP
  fetch('../../modelo/user.php')
    .then(res => res.json())
    .then(user => {
      if (!user.loggedIn) {
        // Si no hay sesión, redirige al formulario de registro
        window.location.href = 'Registro.php';
      } else {
        // Si hay sesión, muestra el nombre del usuario
        document.querySelector('.profile-name').textContent = user.nombre;
        document.querySelector('.profile-email').textContent = 'Usuario activo';
      }
    })
    .catch(err => {
      console.error('Error verificando sesión:', err);
    });

  // Lógica para cerrar sesión al hacer clic en el botón
  const logoutBtn = document.getElementById('logout-btn');
  if(logoutBtn) {
    logoutBtn.addEventListener('click', () => {
      fetch('../../controlador/cierre.php', {
        method: 'POST'
      })
      .then(res => res.json())
      .then(data => {
        if (data.loggedOut) {
          // Redirige al inicio después de cerrar sesión
          window.location.href = '/RendiX-PHP-1/views/index.php';
        } else {
          alert('No se pudo cerrar sesión.');
        }
      })
      .catch(err => {
        console.error('Error al cerrar sesión:', err);
      });
    });
  }
});
 </script>
</body>
</html>
