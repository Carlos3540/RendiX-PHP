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
    <h2>Renault Kwid 2019</h2>
    
    <!-- Contenedor de la imagen del producto -->
    <div class="image-container">
      <img src="../IMAGENES/Renault Kwid.jpeg" alt="Carro"class="centered-image" width="400">
    </div>
    
    <!-- Descripción detallada del producto -->
    <h2>Descripción del Renault Kwid 2019 para Alquilar</h2>
    <p id="p3">
        El Renault Kwid 2019 es un automóvil compacto y robusto, ideal para quienes buscan una opción práctica y económica para sus desplazamientos diarios.
        Este modelo ha sido muy popular por su diseño atractivo y su capacidad de adaptarse a diversas condiciones de manejo.
    </p>
    
    <!-- Información sobre el tiempo de uso del producto -->
    <h2>Tiempo de uso</h2>
    <p id="p3">
        El carro Renault Kwid 2019, propiedad de <b>la compañia Cars Limit Compañía de Alquiler y Venta de Autos de Segunda Mano</b>, ha sido utilizado de manera regular para pruebas y demostraciones. 
        Gracias a los mantenimientos periódicos, el tiempo de uso activo ha sido de aproximadamente 5 años con un promedio de uso diario de 4 horas (35.000 km).
        El Renault Kwid 2019 está en excelente estado y listo para ser alquilado, ofreciendo una experiencia de manejo confiable y cómoda.
    </p>
    
    <!-- Características principales del producto -->
    <h2>Características Principales</h2>
    <p id="p3">
        <b>Motor:</b> 1.0L SCe de 3 cilindros, 66 caballos de potencia a 5750 rpm.

        <br><b>Transmisión:</b> Manual de 5 velocidades.

        <br><b>Dimensiones:</b> 
        
        <br><b>Largo:</b> 3731 mm, Ancho: 1759 mm, Altura: 1481 mm.

        <br><b>Capacidad de Carga:</b> 399 kg (incluyendo cinco pasajeros).

        <br><b>Capacidad del Maletero:</b> 290 litros, expandible hasta 1100 litros al abatir los asientos traseros.

        <br><b>Confort:</b> Dirección asistida eléctricamente, aire acondicionado, y asientos delanteros ajustables.

         <br><b>Seguridad:</b> 4 airbags (frontal y lateral), control de estabilidad (ESP), frenos ABS, y alerta de presión de neumáticos3.
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

    <br>Estos beneficios hacen que alquilar con Rendix sea práctico y seguro para los propietarios.
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
 <!-- Bloque de pago con PayPal -->
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
    <h2>Conoce más información de nuestra compañia RendixMaster</h2>
    <div class="metcards-container">
      <div class="cardprofile">
        <span class="card__title">Cars Limit</span>
        <img src="../IMAGENES/pexels-mikebirdy-945443.jpg" alt="Profile" width="100">
        <p class="card__content">
          <b>¡Hola! Somos Cars Limit</b>, una compañía de alquiler y venta de coches tipo concesionario,
           dedicada a ofrecer vehículos de alta calidad y un servicio excepcional a nuestros clientes. Nos unimos a RendiX para revolcionar el mercado del alquiler carros.
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
