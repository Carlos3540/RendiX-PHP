<?php
session_start();

// Verifica si en la URL existe el parámetro 'vaciar' y si su valor es 1
if (isset($_GET['vaciar']) && $_GET['vaciar'] == 1) {
   // Si existe una sesión llamada 'carrito', la vacía (reinicia como un arreglo vacío)
    if (isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
   // Redirige al usuario a 'index.php' para evitar que la URL siga mostrando '?vaciar=1'
    header("Location:index.php");
    exit();
}

// Carga el archivo donde se encuentra la clase 'Producto'
// Este archivo debe contener la definición de la clase usada más adelante
require_once __DIR__ . '/../modelo/Productos.php';
// Crea un arreglo para almacenar los productos que se van a mostrar en la vista principal
$productosDestacados = [];
// Agrega productos destacados al arreglo utilizando objetos de la clase 'Producto'
// Cada producto contiene: id, nombre, imagen, precio, duración del alquiler, descripción, y enlace a más información
$productosDestacados[] = new Producto(
    1, // ID del producto
    "Lavadora 11 Kilogramos Haceb Panel Frontal Digital Gris",
    "IMAGENES/7704353431483-1.webp",
    50000,
    "Por 1 día",
    "La lavadora Haceb, tiene período de uso de 2 meses. Marca: Haceb...",
    "HTML/Lavadora.php"
);

$productosDestacados[] = new Producto(
    2,
    "Televisor 32 Pulgadas Challenger LED TV3",
    "IMAGENES/7705191043944_01.webp",
    65000,
    "Por 1 día",
    "El Televisor 32\" Challenger LED TV es un televisor con tiempo de uso de 5 meses...",
    "HTML/televisor.php"
);

$productosDestacados[] = new Producto(
    3,
    "Xbox 360",
    "IMAGENES/41G+FzEeRCL.jpg",
    49900,
    "Por 1 día",
    "La Xbox 360 tiene un tiempo de uso de 1 año...",
    "HTML/xbox.php"
);

$productosDestacados[] = new Producto(
    4,
    "CAMPING IGLU ROYAKAMP 4 PERSONAS",
    "IMAGENES/tienda-turistica-aislado-sobre-fondo-blanco_873674-588.avif",
    35000,
    "Por 3 días",
    "La tienda Iglú es ideal para 4 personas...",
    "HTML/camping.php"
);

$productosDestacados[] = new Producto(
    5,
    "Renault Kwid 2019",
    "IMAGENES/Renault Kwid.jpeg",
    500000,
    "Por 7 días",
    "El Renault Kwid es modelo 2019 con 35.000 km, económico y práctico...",
    "HTML/carro.php"
);

// Antes de agregar el producto PC Gamer, se verifica que el archivo de detalle exista
$pcDetalle = file_exists(__DIR__ . '/HTML/pcgamer.php') ? "HTML/pcgamer.php" : "#";// Si no existe, se pone '#' como enlace de placeholder

$productosDestacados[] = new Producto(
    6,
    "PC Gamer Ryzen 5",
    "IMAGENES/PCRYZEN.webp",
    150000,
    "Por 5 días",
    "Computador de escritorio con procesador Ryzen 5, 16 GB RAM, tarjeta gráfica GTX 1660...",
    $pcDetalle
);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Declaración del juego de caracteres y la configuración de la vista en dispositivos móviles -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rendix.COM</title>
  <link rel="stylesheet" href="CSS/Style.css">
  <script src="JS/Botones.js"> </script>
  <script src="JS/VerificarSesion.js"></script>


</head>
<body>
  <header>
    <div class="container">
      <div class="logo">
        <img src="IMAGENES/RENDIXblanco.png" alt="Logo de Rendix">
      </div>
      
      <nav>
<!--Boton de busqueda-->
<div class="input__container"> 
  <div class="shadow__input"></div> 
    <button class="input__button__shadow" onclick="buscarProducto()"> 
      <svg fill="none" viewBox="0 0 20 20" height="20px" width="20px"> 
         <path d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z" fill-rule="evenodd" fill="#17202A"></path> </svg> 
           </button>
 <input type="text" name="text" class="input__search" id="busqueda" placeholder="Buscar Productos, Marcas o Servicios"> 
</div>

        <ul id="menu">
        <li><a href="HTML/Registro.php" id="sesion-link">Regístrate/Inicia Sesión</a></li>
        <li><a href="index.php">Productos destacados</a></li>
          <li><a href="HTML/contactenos.php">Contáctenos</a></li>
          <li class="dropdown">
            <a href="#">Más opciones</a>
            <ul class="dropdown-content">
              <li><a href="HTML/Calificanos.php">Califícanos</a></li>
              <li><a href="HTML/Pagina de ayuda.php">Ayuda</a></li>
              <li><a href="HTML/PQRS.php">PQRS</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <button onclick="carro()" class="button">
      ALQUILA YA
      <svg class="cartIcon" viewBox="10 0 1210 577">
        <path d="M0 23C0 0.75 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
        </path>
      </svg>
    </button>
    
  </header>
  <!-- Contenedor para las filas -->
   <!-- Texto de introducción a la sección de productos destacados del día -->
 
   <div class="slider" id="promoSlider">
    <div class="slides">
      <div class="slide" style="background: 
  
        url('IMAGENES/PUBLICIDAD3.png') center/cover no-repeat;">
        <div class="content">
          <p>Hasta 40% OFF en perfumes y accesorios</p>
          <a href="#" class="btn">Ver Ofertas</a>
        </div>

      </div>
      <div class="slide" style="background: 
  
        url('IMAGENES/FondoPapa.png') center/cover no-repeat;">
        <div class="content">
          <p>Hasta 30% OFF en relojes y accesorios para ese super Papá</p>
          <a href="#" class="btn">Ver Ofertas</a>
        </div>

      </div>
      
  
      <div class="slide" style="background: 
        url('IMAGENES/publicidad2.png') center/cover no-repeat;">
        <div class="content">
        </div>
      </div>
  
      <div class="slide" style="background:  
        url('IMAGENES/punlicidad4.png') center/cover no-repeat;">
        <div class="content">
          <a href="#" class="btn">Descubre más</a>
        </div>
      </div>  
      <div class="slide" style="background: 
  
      url('IMAGENES/publicidad5.png') center/cover no-repeat;">
      <div class="content">
        <a href="#" class="btn">Conocenós</a>
      </div>

    </div>
    </div>
  </div>
 
  
  <div class="seccion-destacados">
    <h3><span class="emoji">🌟</span>¡Descubre los Productos de alquiler del Día!<span class="emoji">🌟</span></h3>
    <h5>No dejes pasar la oportunidad! Sumérgete en nuestra selección especial de hoy y encuentra increíbles ofertas en productos destacados. <span class="emoji">¡Sólo por tiempo limitado! 🚀🛒</span></h5>
  </div>
  
   <!-- Contenedor principal de productos organizados en filas -->
   <div class="flex-container" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-between;">
<!-- Bucle para mostrar cada producto destacado -->
<?php foreach ($productosDestacados as $index => $producto): ?>
    <div class="BloqueProducto">
        <div class="card">
            <div class="content">
               <!-- Nombre del producto centrado y en negrita -->
                <p style="text-align: center; font-weight: bold; min-height: 40px;">
                    <?php echo htmlspecialchars($producto->getNombre()); ?>
                </p>
                 <!-- Imagen del producto con ancho de 200px y texto alternativo -->
                <img src="<?php echo htmlspecialchars($producto->getImagenUrl()); ?>" alt="<?php echo htmlspecialchars($producto->getNombre()); ?>" width="200">
                <br><br>
                   <!-- Mostrar precio formateado -->
                <div class="price1"><?php echo htmlspecialchars($producto->getPrecioFormateado()); ?></div>
                <!-- Mostrar unidad de tiempo para el precio, por ejemplo "Por 1 día" -->
                <div class="price1"><?php echo htmlspecialchars($producto->getUnidadTiempoPrecio()); ?></div>
                <!-- Mostrar descripción breve del producto -->
                <div class="description" style="min-height: 60px;"><?php echo htmlspecialchars($producto->getDescripcionGeneral()); ?></div>
            </div>
                <!-- Botón que redirige a la página de detalle para alquilar el producto -->
            <button onclick="window.location.href='<?php echo htmlspecialchars($producto->getUrlDetalle()); ?>'">Alquilar</button>
                 <!-- Botón que llama a la función JS agregarAlCarrito enviando el ID del producto y cantidad 1 -->
            <div class="agregar-carrito-container">
               <button onclick="console.log('Producto ID:', <?php echo htmlspecialchars($producto->getId()); ?>); agregarAlCarrito(<?php echo htmlspecialchars($producto->getId()); ?>, 1)">Agregar al carrito</button>

            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
// Función que envía la solicitud para agregar un producto al carrito sin detener la página, 
// espera la respuesta del servidor en segundo plano y luego muestra un mensaje según el resultado.
function agregarAlCarrito(productoId, cantidad) {
    console.log("Enviando al backend:", productoId, cantidad); 
    // Petición POST con fetch para enviar datos JSON al controlador PHP
    fetch('../controlador/CarritoControlador.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            producto_id: productoId,
            cantidad: cantidad,
            alquilar: true
        })
    })
    // Convertir la respuesta JSON a objeto JS
    .then(response => response.json())
    .then(data => {
        console.log("Respuesta del backend:", data); 
        // Mostrar alerta con mensaje según éxito o error
        if (data.success) {
            alert(data.mensaje);
        } else {
            alert('Error: ' + data.mensaje);
        }
    })
    .catch(error => {
    // Capturar y mostrar cualquier error de red o procesamiento
        console.error('Error:', error);
        alert('Error al procesar la solicitud');
    });
}

</script>


  
  </div>
  
<section id="seccion3">
  <h2 id="p2">Nuestros Servicios, RendiX La nueva forma de alquilar fácil y sin limites</h2>
  <div class="flex-container1">
    <!-- Primera columna -->
    <div class="column1">
      <h3 id="title">Paga Con tarjeta o efectivo </h3>
      <p id="p4">En RendiX, paga en cuotas y aprovecha la comodidad de financiación que te da tu banco, o hazlo con efectivo en puntos de pago. 
        <br>¡Y siempre de la manera más segura!
      </p>
      <img src="IMAGENES/Logos-Formas-de-Pago-2-sin-Medios.png" alt="Videojuego #3" width="450">
    </div>
    <!-- Segunda columna -->
    <div class="column2">
      <h3 id="title">Descuentos exclusivos para miembros:</h3>
      <p>Accede a ofertas exclusivas y descuentos solo para miembros registrados. ¡Únete gratis y comienza a ahorrar en cada compra!
      </p>
      <img src="IMAGENES/MEMBRESÍA.png" alt="Videojuego #4" width="450">
    </div>
    <div class="column3">
      <h3 id="title">Seguridad de principio a fin</h3>
      <p>En RendiX, aseguramos tu satisfacción con cada alquiler. Si algo no cumple con tus expectativas, te ofrecemos la facilidad de devolución sin complicaciones. Con nuestra garantía de protección, puedes alquilar con total confianza.
      </p>
      <img src="IMAGENES/cash-back-icon-money-back-cash-back-rebate-thin-line-web-symbol-on-isolated-background-editable-free-vector.jpg" alt="Videojuego #4" width="200">
    </div>
</section>
<h2 id="p2">¿QUIENES SOMOS?

</h2>
<div class="image-container"><img src="IMAGENES/Captura de pantalla 2024-10-05 110738.png" alt="Videojuego #4"class="centered-image"width="350"></div>

<P id="p3">
  
  En RendiX, transformamos la forma en que alquilas productos y servicios. Te ofrecemos una plataforma segura y conveniente con una amplia gama de artículos, desde electrodomésticos hasta vehículos. Nuestra misión es facilitar tu vida y cuidar de tu economía, permitiéndote alquilar sin los altos costos de compra.
  
  Optar por el alquiler en RendiX no solo te ayuda a gestionar mejor tu presupuesto, sino que también fomenta una economía más sostenible y responsable. Con nosotros, siempre estás protegido y puedes disfrutar de una experiencia de alquiler simple y sin complicaciones.
  
  Bienvenido a RendiX, donde el alquiler se convierte en una solución económica y segura.</P>
<!-- Contenedor de pie de página con información de contacto -->
<footer id="footgrey">
  <div class="containerhead">
      <div class="footer-container">
          <div class="footer-section">
              <img src="IMAGENES/RENDIXblanco.png" alt="Logo RendiX" class="footer-logo">
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
              <h3 id="hfoot">Enlaces rápidos</h3>
              <ul class="footer-links">
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Productos destacados</a></li>
                  <li><a href="#">Categorías</a></li>
                  <li><a href="#">Ofertas especiales</a></li>
                  <li><a href="#">Sobre nosotros</a></li>
              </ul>
          </div>
          
          <div class="footer-section">
              <h3 id="hfoot">Ayuda</h3>
              <ul class="footer-links">
                  <li><a href="#">Preguntas frecuentes</a></li>
                  <li><a href="#">Términos y condiciones</a></li>
                  <li><a href="#">Política de privacidad</a></li>
                  <li><a href="#">PQRS</a></li>
                  <li><a href="#">Califícanos</a></li>
              </ul>
          </div>
          
          <div class="footer-section">
              <h3 id="hfoot">Contacto</h3>
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
</div>
      <div class="copyright">
          &copy; 2025 RendiX. Todos los derechos reservados.
      </div>






</body>
</html>
