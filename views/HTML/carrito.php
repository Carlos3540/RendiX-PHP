<?php
session_start();
// Incluir la clase que maneja el carrito de compras
require_once '../../modelo/CarritoCompra.php';
// Incluir el archivo de configuración y conexión a la base de datos
require_once(__DIR__ . '/../../config/Conexion.php');
// Crear conexión a la base de datos
$conn = Conexion::conectar();
// Preparar consulta SQL para obtener productos en el carrito junto con sus datos desde la tabla productos
$query = $conn->prepare("
    SELECT c.id, p.nombre, p.precio_arriendo AS precio, c.cantidad, p.imagen 
    FROM carrito c 
    JOIN productos p ON c.producto_id = p.id
");
// Ejecutar la consulta
$query->execute();
// Obtener todos los productos del carrito como un arreglo asociativo
$productosEnCarrito = $query->fetchAll(PDO::FETCH_ASSOC);
// Crear una instancia de la clase CarritoCompra para manipular el carrito
$carrito = new CarritoCompra();

// Verificar si se envió el formulario para vaciar el carrito
if (isset($_POST['vaciar'])) {
    $carrito->vaciarCarrito();// Vaciar el carrito
    header("Location:carrito.php");  // Redirigir a la página del carrito para actualizar la vista
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="../CSS/StyleCalifica.css">
  <title>Tu Carrito</title>
  <style>
    /* Main Reset and Variables */
    :root {
      --primary-color: #ff5500;
      --primary-light: #ff7733;
      --primary-dark:rgb(63, 63, 63);
      --secondary-color: #333333;
      --light-gray: #f5f5f5;
      --medium-gray: #e0e0e0;
      --dark-gray: #666666;
      --white: #ffffff;
      --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      --border-radius: 8px;
      --transition: all 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--light-gray);
      color: var(--secondary-color);
      line-height: 1.6;
    }

    /* Header Styling */
    header {
      background-color: var(--primary-color);
      color: var(--white);
      padding: 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow);
    }

    header h1 {
      font-size: 2rem;
      font-weight: 600;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .imgr {
      height: 90px;
      border-radius: var(--border-radius);
      padding: 4px;
    }

    /* Main Content */
    main {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1.5rem;
    }

    #productos-carrito {
      background-color: var(--white);
      border-radius: var(--border-radius);
      padding: 2rem;
      box-shadow: var(--shadow);
      margin-bottom: 2rem;
    }

    #productos-carrito p {
      text-align: center;
      font-size: 1.2rem;
      color: var(--dark-gray);
      padding: 2rem 0;
    }

    /* Product in Cart Styling */
    .producto-en-carrito {
      display: grid;
      grid-template-columns: 100px 1fr auto;
      gap: 1.5rem;
      align-items: center;
      padding: 1.5rem;
      border-bottom: 1px solid var(--medium-gray);
      transition: var(--transition);
    }

    .producto-en-carrito:hover {
      background-color: var(--light-gray);
    }

    .producto-en-carrito img {
      width: 100%;
      border-radius: var(--border-radius);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      object-fit: cover;
    }

    .producto-en-carrito h3 {
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
      color: var(--secondary-color);
    }

    .producto-en-carrito p {
      color: var(--dark-gray);
      margin-bottom: 0.3rem;
      padding: 0;
      text-align: left;
    }

    /* Total and Buttons */
    #productos-carrito h2 {
      text-align: right;
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 2px solid var(--medium-gray);
      font-size: 1.5rem;
      color: var(--secondary-color);
    }

    button {
      background-color: var(--primary-color);
      color: var(--white);
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: var(--border-radius);
      cursor: pointer;
      font-size: 1rem;
      font-weight: 600;
      transition: var(--transition);
      margin-top: 1.5rem;
      display: block;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    button:hover {
      background-color: var(--primary-light);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    button:active {
      background-color: var(--primary-dark);
      transform: translateY(0);
    }

    #productos-carrito button {
      margin-left: auto;
      display: block;
    }

   

    /* Responsive Design */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
      }
      
      .producto-en-carrito {
        grid-template-columns: 1fr;
        text-align: center;
      }
      
      .producto-en-carrito img {
        width: 80px;
        margin: 0 auto;
      }
      
      #productos-carrito button {
        margin: 1.5rem auto 0;
      }
      
      #productos-carrito h2 {
        text-align: center;
      }
    }

    @media (max-width: 576px) {
      main {
        padding: 0 1rem;
      }
      
      #productos-carrito {
        padding: 1.5rem 1rem;
      }
      
      .footer-container {
        grid-template-columns: 1fr;
      }
      
      button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Tu Carrito</h1>
    <a href="../index.php">
      <img src="../IMAGENES/RENDIXblanco.png" alt="rendix" class="imgr">
    </a>
  </header>

  <main>
    <div id="productos-carrito">
<?php
// Si no hay productos en el carrito, mostrar mensaje
if (empty($productosEnCarrito)) {
    echo "<p>No hay productos en tu carrito aún.</p>";
} else {
  // Recorrer cada producto y mostrar su información
    foreach ($productosEnCarrito as $producto) {
      // Construir la ruta de la imagen asegurando que no agregue rutas innecesarias
    $imagenPath = "../IMAGENES/" . basename($producto['imagen']); // Asegura que no agregue "/views/"
    echo "<div class='producto-en-carrito'>";
    echo "<img src='" . htmlspecialchars($imagenPath) . "' alt='{$producto['nombre']}' width='100'>";
    echo "<h3>{$producto['nombre']}</h3>";
    // Mostrar el precio con formato de moneda
    echo "<p>Precio: $" . number_format($producto['precio'], 0, ',', '.') . "</p>";
    echo "<p>Cantidad: " . htmlspecialchars($producto['cantidad']) . "</p>";
    echo "</div>";
}
// Calcular y mostrar el total sumando los precios de todos los productos en el carrito
    echo "<h2>Total a pagar: $" . number_format(array_sum(array_column($productosEnCarrito, 'precio')), 0, ',', '.') . "</h2>";
      // Botón para proceder al pago, redirige a la página de pago
    echo '<button onclick="window.location.href=\'pago.php\'">Pagar</button>';
}

?>
</div>

   <form method="post" style="text-align: right; margin-top: 1rem;">
  <button type="submit" name="vaciar">Vaciar carrito</button>
</form>

  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-col">
        <img src="../IMAGENES/RENDIXblanco.png" alt="Logo Rendix" class="footer-logo">
        <p>RendiX es tu plataforma de alquiler de productos premium. Ofrecemos soluciones de alta calidad para tus necesidades temporales.</p>
      </div>

      <div class="footer-col">
        <h3>Enlaces rápidos</h3>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Productos destacados</a></li>
          <li><a href="#">Categorías</a></li>
          <li><a href="#">Ofertas especiales</a></li>
          <li><a href="#">Sobre nosotros</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3>Ayuda</h3>
        <ul>
          <li><a href="#">Preguntas frecuentes</a></li>
          <li><a href="#">Términos y condiciones</a></li>
          <li><a href="#">Política de privacidad</a></li>
          <li><a href="#">PQRS</a></li>
          <li><a href="#">Califícanos</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3>Contacto</h3>
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> Calle Principal #123, Ciudad</li>
          <li><i class="fas fa-phone"></i> +57 123 456 7890</li>
          <li><i class="fas fa-envelope"></i> contacto@rendix.com</li>
        </ul>
      </div>
    </div>
  </footer>

 
</body>
</html>