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
    <link rel="stylesheet" href="../CSS/Style.css">
    <script src="../JS/Botones.js"></script>
    <script src="../JS/VerificarSesion.js"></script>
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
               <li><a href="Registro.php" id="sesion-link">Regístrate/Inicia Sesión</a></li>
                <li><a href="../index.php">Productos destacados</a></li> 
                <li><a href="contactenos.php">Contáctenos</a></li>
                <li class="dropdown">
                  <a href="#">Más opciones</a>
                  <ul class="dropdown-content">
                    <li><a href="Calificanos.php">Califícanos</a></li>
                    <li><a href="Pagina de ayuda.php">Ayuda</a></li>
                    <li><a href="PQRS.php">PQRS</a></li>
                  </ul>
                </li>
              </ul>
          </nav>
        </div>
    </header>
    
    <!-- Título y descripción de la página -->
    <h3 id="l1">¿Estás interesado en alquilar este producto?</h3>
    <h2>IBIZA SOUND XTK10 BAFLE SONIDO ABS PASIVO</h2>
    
    <!-- Contenedor de la imagen del producto -->
    <div class="image-container">
      <img src="../IMAGENES/karma-bx-7415-altavoz-pasivo-de-15-450w.jpg" alt="Lavadora-Haceb"class="centered-image" width="320">
    </div>
    
    <!-- Descripción detallada del producto -->
    <h2>Descripción del IBIZA SOUND XTK10 BAFLE SONIDO ABS PASIVO para Alquilar</h2>
    <p id="p3">
        El IBIZA SOUND XTK10 es un bafle pasivo de 10 pulgadas (25 cm) con un sistema bass reflex de 2 vías. 
        Está diseñado para ofrecer una excelente claridad vocal y calidad de sonido, ideal para su uso en bares, salas de tamaño mediano o eventos móviles
    </p>
    
    <!-- Información sobre el tiempo de uso del producto -->
    <h2>Tiempo de uso</h2>
    <p id="p3">
      El IBIZA SOUND XTK10, propiedad de <b>Luis Alfonso Goméz Suarez</b>, ha demostrado ser un compañero confiable y robusto durante los últimos 9 meses. 
      Este bafle pasivo ha sido utilizado regularmente en diversos eventos, proporcionando una claridad de sonido excepcional y una potente salida de audio, manteniéndose en perfectas condiciones gracias al cuidado diligente de su propietario. 
      Lista para ofrecer un rendimiento eficiente y confiable a los próximos usuarios que decidan alquilarla.
    </p>
    
    <!-- Características principales del producto -->
    <h2>Características Principales</h2>
    <p id="p3">
        <b>1.Tamaño del Altavoz:</b> 10 pulgadas (25 cm)

        <br><b>2.Potencia:</b> 300W RMS
        
        <br><b>3.Construcción</b>: ABS moldeado, lo que lo hace ligero y fácil de transportar
        
        <br><b>4.Sistema Bass Reflex:</b> 2 vías
        
        <br><b>5.Rejilla Metálica:</b> Protección integral
        
        <br><b>6.Entradas:</b> Toma de 3.5 mm y Speakon OUT para conectar un segundo altavoz pasivo
        
        <br><b>7.Control de Sonido:</b> Micrófono, eco, graves, agudos y control de volumen principa
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
            <img src="../IMAGENES/1757493.png" alt="Lavadora-Haceb" width="100">
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
      <span class="price">PayPal o Tarjeta</span>
        <br>
            <br>
      <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal Logo" width="100">
    </div>
    <p class="desc">Realiza tu pago de manera rápida y segura con tu cuenta PayPal, sin necesidad de ingresar los datos de tu tarjeta directamente.</p>
    <ul class="lists">
      <li class="list">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <span>Transacción segura y protegida</span>
      </li>
    </ul>

    <!-- Contenedor del botón PayPal -->
    <div id="paypal-button-container" class="paypal-button-wrapper"></div>

</div>

  </div>
</div>

<!-- SDK PayPal -->
<script src="https://www.paypal.com/sdk/js?client-id=AencSSbUWL0LaXGyMj6YDdQ4G_PobGqPmSnIXt2mHi9Uisoy05fWbbW9mH4zbL-Fo9jidlWTwsSwasY4&currency=USD"></script>
<script src="../JS/Paypal-Pago.js"></script>


    </div> <!-- Fin del contenedor principal de métodos de pago -->

    <!-- Información de contacto con la propietaria del producto -->
    <h2>Conoce más información de nuestra RendixMaster</h2>
    <div class="metcards-container">
      <div class="cardprofile">
        <span class="card__title">Luis Alfonso Goméz Suarez</span>
        <img src="../IMAGENES/pexels-italo-melo-881954-2379004.jpg" alt="Profile" width="100">
        <p class="card__content">
          <b>¡Hola! Soy Luis Alfonso Gómez Suárez</b>, , un profesional en marketing apasionado por crear estrategias efectivas y ahora también proveedor de productos en RendiX.
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

