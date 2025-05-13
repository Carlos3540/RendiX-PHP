<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags para configuración básica de la página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de pago</title>
    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="CSS/Style.css">
    <script src="Botones.js"></script>
</head>
<body>
    <!-- Inicio del encabezado de la página -->
    <header>
        <div class="container">
          <div class="logo">
            <!-- Imagen del logo de RendiX -->
            <img src="../IMAGENES/RENDIXblanco.png" alt="Logo de Rendix">
          </div>
          
          <!-- Barra de navegación -->
           <nav>
              <ul id="menu">
                <li><a href="../iniciyoregis.php">Regístrate / Inicia Sesión</a></li>
                <li><a href="../index.php">Productos destacados</a></li> 
                <li><a href="../contactenos.php">Contáctenos</a></li>
                <li class="dropdown">
                  <a href="#">Más opciones</a>
                  <ul class="dropdown-content">
                    <li><a href="../Calificanos.php">Califícanos</a></li>
                    <li><a href="../Pagina de ayuda.php">Ayuda</a></li>
                    <li><a href="../PQRS.php">PQRS</a></li>
                  </ul>
                </li>
              </ul>
          </nav>
        </div>
    </header>
    
    <!-- Título y descripción de la página -->
    <h3 id="l1">¿Estás interesado en alquilar este producto?</h3>
    <h2>Xbox 360</h2>
    
    <!-- Contenedor de la imagen del producto -->
    <div class="image-container">
      <img src="IMAGENES/41G+FzEeRCL.jpg" alt="Xbox 360"class="centered-image" width="400">
    </div>
    
    <!-- Descripción detallada del producto -->
    <h2>Descripción del Xbox 360 para Alquilar</h2>
    <p id="p3">
        El Xbox 360 es una consola de videojuegos de sobremesa desarrollada por Microsoft y lanzada en 2005. Es conocida por su amplia biblioteca de juegos y su capacidad para conectarse a Xbox Live,
        permitiendo a los jugadores competir en línea y descargar contenido adicional.
    </p>
    
    <!-- Información sobre el tiempo de uso del producto -->
    <h2>Tiempo de uso</h2>
    <p id="p3">
        El Xbox 360, propiedad de <b>la compañia tecnologica Social Tech</b>,ha sido utilizado de manera regular para pruebas y demostraciones de videojuegos. 
        Gracias a los mantenimientos periódicos, el tiempo de uso activo ha sido de aproximadamente 1 año con un promedio de uso diario de 2 horas.
        El Xbox 360 está en excelente estado y listo para ser alquilado, ofreciendo una experiencia de juego inigualable para los entusiastas de los videojuegos.
    </p>
    
    <!-- Características principales del producto -->
    <h2>Características Principales</h2>
    <p id="p3">
        <b>Procesador:</b> 3.2 GHz (PowerPC) Tri-Core IBM Xenon.

        <br><b>Memoria RAM:</b> 512 MB de RAM GDDR3.

        <br><b>Unidad de Almacenamiento:</b> Disco duro extraíble de 20 GB a 500 GB.

        <br><b>Resolución de Vídeo:</b> Hasta 1080p.

        <br><b>Conectividad:</b> 5 puertos USB, Wi-Fi 802.11a/b/g/n, Ethernet Gigabit.

        <br><b>Compatibilidad:</b> Retrocompatibilidad con juegos de Xbox original.

        <br><b>Audio:</b> Soporte para Dolby Digital 5.1.
    </p>
    
    <!-- Beneficios de alquilar en RendiX -->
    <h2>Beneficios de Alquiler en RendiX</h2>
    <p id="p3">
      <b>1. Costo Asequible:</b> Alquilar productos te permite disfrutar de sus beneficios sin un gran desembolso inicial

     <br><b>2. Asesoría Experta:</b> Ofrecen asesoramiento para fijar el precio correcto y encontrar buenos inquilinos.

     <br><b>3. Seguridad:</b> Proceso seguro y transparente.

     <br><b>4. Legalidad:</b> Aseguran que todos los trámites legales estén en orden.

    <br><b>5. Pago Seguro:</b> Garantizan el pago puntual del alquiler.

    <br><b>6. Promoción Eficaz:</b> Estrategias de marketing para atraer inquilinos calificados.

    <br><b>Estos beneficios hacen que alquilar con Rendix sea práctico y seguro para los propietarios.
    </p>

    <!-- Contenedor principal para los métodos de pago -->
    <div class="metcards-container">

      <!-- Primer bloque de método de pago: Contra Entrega -->
      <div class="Bloque1">
        <div class="metcard">
          <div class="meta">
            <!-- Título y subtítulo del método de pago -->
            <span class="mettitle">CONTRA</span>
            <span class="price">ENTREGA</span>
            <!-- Imagen representativa del método de pago -->
            <br>
            <br>
            <img src="IMAGENES/1757493.png" alt="Lavadora-Haceb" width="100">
          </div>
          <!-- Descripción del método de pago -->
          <p class="desc">Método de pago en el cual el cliente realiza el pago de su compra al momento de recibir el producto en su domicilio.</p>
          <!-- Lista de características del método de pago -->
          <br>
          <ul class="lists">
            <li class="list">
              <!-- Icono SVG para la primera característica -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Seguridad</span>
            </li>
          </ul>
          <!-- Botón para continuar con este método de pago -->
          <button onclick="met1()" class="action">continuar</button>
        </div>
      </div>

      <!-- Segundo bloque de método de pago: Tarjeta Bancaria -->
      <div class="Bloque2">
        <div class="metcard">
          <div class="meta">
            <span class="mettitle">Pago Con</span>
            <span class="price">Tarjeta Bancaria</span>
            <img src="IMAGENES/6757707.png" alt="Lavadora-Haceb" width="100">
          </div>
          <p class="desc">Método de pago en el cual se realiza una transacción en la que un cliente utiliza una tarjeta de débito o crédito...</p>
          <ul class="lists">
            <li class="list">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span>Seguridad</span>
            </li>
          </ul>
          <button onclick="met2()" class="action">continuar</button>
        </div>
      </div>

    </div> <!-- Fin del contenedor principal de métodos de pago -->

    <!-- Información de contacto con la propietaria del producto -->
    <h2>Conoce más información de nuestra compañia RendixMaster</h2>
    <div class="metcards-container">
      <div class="cardprofile">
        <span class="card__title">Social Tech</span>
        <img src="IMAGENES/pexels-junior-teixeira-1064069-2047905.jpg" alt="Profile" width="100">
        <p class="card__content">
          <b>¡Hola! Somos Social Tech</b>, Compañía de Tecnología enfocada a los videojuegos, una empresa apasionada por la innovación y el avance en el mundo del entretenimiento digital.
           Ahora también proveedor de productos Tecnologicos  en RendiX.
        </p>
        <!-- Formulario para contacto -->
        <form class="card__form" onsubmit="registro(event)">
          <input required="" type="email" placeholder="Escribe tu Email para ponerte en contacto" />
          <button type="submit" class="card__button">Contactar</button>

        </form>
      </div>
    </div>
</body>
</html>
