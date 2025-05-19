document.addEventListener("DOMContentLoaded", () => {
  
  fetch('/RendiX-PHP/modelo/user.php', {
  credentials: 'same-origin'
})

    .then(res => res.json())
    .then(data => {
      console.log("Resultado de sesión:", data); // Para depuración

      // Si el usuario ha iniciado sesión
      if (data.loggedIn) {
        // Botón principal de login
        const loginBtn = document.getElementById('login-btn');
        if (loginBtn) {
          loginBtn.textContent = data.nombre;
          loginBtn.onclick = () => window.location.href = '/RendiX-PHP/views/HTML/Perfil.php';
        }

        // Enlace de sesión
        const sesionLink = document.getElementById('sesion-link');
        if (sesionLink) {
          sesionLink.textContent = `Hola, ${data.nombre}`;
          sesionLink.href = '/RendiX-PHP/views/HTML/Perfil.php';
        }

      } else {
        // Si NO ha iniciado sesión
        const sesionLink = document.getElementById('sesion-link');
        if (sesionLink) {
          sesionLink.textContent = "Regístrate / Inicia Sesión";
          sesionLink.href = 'HTML/Registro.php';
        }
      }
    })
    .catch(error => console.error("Error verificando sesión:", error));
});
