document.addEventListener("DOMContentLoaded", () => {
  const loginLink = document.getElementById('sesion-link'); // Usar id en vez de selector de href

  fetch('../../modelo/user.php')
    .then(res => res.json())
    .then(data => {
      if (data.loggedIn) {
        if (loginLink) {
          loginLink.textContent = `Hola, ${data.nombre}`;
          loginLink.href = "perfil.php";
        }
      } else {
        if (loginLink) {
          loginLink.textContent = "Regístrate / Inicia Sesión";
          loginLink.href = "Registro.php";
        }
      }
    })
    .catch(err => console.error("Error verificando sesión:", err));
});
