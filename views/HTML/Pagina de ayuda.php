<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" href="../CSS/StyleAyuda.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../IMAGENES/RENDIXblanco.png" alt="Logo de Rendix">
            </div>
            <nav>
                <!-- Botón de búsqueda -->
                <div class="input__container">
                    <div class="shadow__input"></div>
                    <button class="input__button__shadow">
                        <svg fill="none" viewBox="0 0 20 20" height="20px" width="20px">
                            <path d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z" fill-rule="evenodd" fill="#17202A"></path>
                        </svg>
                    </button>
                    <input type="text" name="text" class="input__search" placeholder="Buscar Productos, Marcas o Servicios">
                </div>
                <ul id="menu">
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
              </div>

                  
               
          </header>
          <body>
              <hr>
              <h1>Centro De Ayuda </h1>
          <P>Encuentra respuestas a tus preguntas o ponte en contacto con nuestro equipo de soporte.</P>
          <center><div class="form-container">
            <form class="form"  id="helpForm">
              <div class="form-group">
                <label for="email">Correo de la compañia</label>
                <input type="text" id="email" name="email" required="">
              </div>
              <div class="form-group">
                <label for="textarea">¿Como podemos ayudarte?</label>
                <textarea name="mensaje" id="textarea" rows="10" cols="50" required></textarea>
              </div>
              <button class="form-submit-btn" type="submit">Enviar</button>
            </form>
          </div></center>

          <script>
// Agrega un listener al formulario con ID 'quejaForm' para manejar el evento de envío
document.getElementById('helpForm').addEventListener('submit', function(e) {
    // Previene el comportamiento por defecto del formulario (recargar la página)
    e.preventDefault();

    // Crea un objeto FormData con todos los datos del formulario actual
    const formData = new FormData(this);

    // Realiza una petición HTTP tipo POST al archivo PqrsController.php
    fetch('../../controlador/AyudaController.php', { 
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
            alert('¡Gracias por tu solicitud! La hemos recibido correctamente.');
            // Limpia (resetea) el formulario para que quede vacío
            document.getElementById('helpForm').reset();
        } else {
            // Si la respuesta indica fallo, muestra un mensaje de error
            alert('Hubo un error al enviar tu solicitud.');
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

            <main>
                <section id="seccion1">
                    <!-- Botón del menú desplegable -->
                    <p class="dropdown-menu-btn"><b>Categorías o temas principales</b></p>
            
                    <!-- Contenido desplegable -->
                    <div class="dropdown-menu-content">
                        <div class="container">
                            <div class="column left">
                                <h2>Cuenta y configuración</h2>
                                <p>
                                    Si tienes problemas con tu cuenta o configuración de esta misma, 
                                    contáctanos para enviar un correo solicitando solucionar un problema.
                                </p>
                            </div>
                            <div class="column right">
                                <h2><b>Pagos y facturación</b></h2>
                                <p>
                                    En el caso de presentar problemas con el pago, debera contactarse con su repsectivo banco o entidad encargada.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="seccion2">
                    <!-- Botón del menú desplegable -->
                    <p class="dropdown-menu2"><b>Problemas tecnicos</b></p>
            
                    <!-- Contenido desplegable -->
                    <div class="dropdown-menu2-content">
                        <div class="container2">
                            <div class="column izquierda">
                                <h2>Envíos y devoluciones.</h2>
                                <p>
                                   En el caso de tener problemas con los envios, nos contactaremos con el arrendador, y en el caso de solicitar una devolucion por cualquiera de las dos partes
                                   se gara el debido proceso del producto y del dinero.
                                </p>
                            </div>
                            <div class="column derecha">
                                <h2><b>Políticas y términos.</b></h2>
                                <p>
                                    En 2003 el Congreso de la República de Colombia fue el encargado de dictar un nuevo marco legal para vigilar el arrendamiento. Se trata de la Ley 820, mejor conocida como ley arrendamiento Colombia. 

                                    El objetivo de emitir este documento era garantizar los derechos y deberes tanto del arrendatario como del arrendador para evitar mayores conflictos entre las dos partes.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            
          
          <pre id="result"></pre>
           <script src="../JS/VerificarSesion.js"></script>
              
          </body>
          </html>
