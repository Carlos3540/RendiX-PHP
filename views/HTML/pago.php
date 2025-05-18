<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">

 <link rel="stylesheet" href="../CSS/Style.css">
  <link rel="stylesheet" href="../CSS/StyleCalifica.css">

  <script src="../JS/Botones.js"></script>
   <script src="../JS/VerificarSesion.js"></script>
  <title>Pago</title>
  <style>
        /* Estilos para el header con tema naranja */
        #pago-header {
            background-color: #FF8C00; /* Naranja principal */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            box-shadow: 0 4px 8px rgba(255, 140, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        #pago-header h1 {
            color: #fff; /* Texto blanco para contraste */
            font-size: 1.8rem;
            margin: 0;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        #pago-header a {
            text-decoration: none;
            margin-left: 1rem;
        }

        /* ID único para el logo - TAMAÑO REDUCIDO */
        #pago-rendix-logo {
            height: 95px; /* Reducido de 50px a 35px */
            width: auto;
            transition: transform 0.3s ease;
            border-radius: 4px;
            padding: 3px;s
        }

        #pago-rendix-logo:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Media queries para responsividad */
        @media (max-width: 768px) {
            #pago-header {
                flex-direction: column;
                padding: 0.8rem;
            }
            
            #pago-header h1 {
                font-size: 1.4rem;
                margin-bottom: 0.5rem;
            }
            
            #pago-rendix-logo {
                height: 30px;
            }
        }
    </style>
 </head>
<body>

  <header id="pago-header">
        <h1>Elige tu método de pago</h1>
        <a href="index.html">
            <img src="../IMAGENES/RENDIXblanco.png" alt="rendix" id="pago-rendix-logo">
        </a>
    </header>
  
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
</body>
<footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-section">
                    <img src="../IMAGENES/RENDIXblanco.png" alt="Logo RendiX" class="footer-logo">
                    <p>RendiX es tu plataforma de alquiler de productos premium. Ofrecemos soluciones de alta calidad para tus necesidades temporales.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3V2z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 7.5h.01"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Enlaces rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos destacados</a></li>
                        <li><a href="#">Categorías</a></li>
                        <li><a href="#">Ofertas especiales</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Ayuda</h3>
                    <ul class="footer-links">
                        <li><a href="#">Preguntas frecuentes</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">PQRS</a></li>
                        <li><a href="#">Califícanos</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <div class="contact-info">
                        <p>
                            <span class="contact-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </span>
                            Calle Principal #123, Ciudad
                        </p>
                        <p>
                            <span class="contact-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path>
                                </svg>
                            </span>
                            +57 123 456 7890
                        </p>
                        <p>
                            <span class="contact-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </span>
                            contacto@rendix.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2025 RendiX. Todos los derechos reservados.
            </div>
</html>
