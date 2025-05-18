document.addEventListener("DOMContentLoaded", () => {
  const loginLink = document.getElementById('sesion-link');

  fetch('../modelo/user.php', {
    credentials: 'same-origin' // Necesario para que la cookie de sesión sea enviada
  })
    .then(res => res.json())
    .then(data => {
      console.log("Resultado de sesión:", data); // Para depurar
      if (data.loggedIn) {
        if (loginLink) {
          loginLink.textContent = `Hola, ${data.nombre}`;
          loginLink.href = "Perfil.php";
        }
      } else {
        if (loginLink) {
          loginLink.textContent = "Regístrate / Inicia Sesión";
          loginLink.href = "HTML/Registro.php";
        }
      }
    })
    .catch(err => console.error("Error verificando sesión:", err));
});
