<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago con Tarjeta</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <script src="Botones.js"></script>
</head>
<body>
    <header>
        <div class="container">
          <div class="logo">
            <!-- Imagen del logo de RendiX -->
            <img src="../IMAGENES/RENDIXblanco.png" alt="Logo de Rendix">
          </div>    
        </div>
    </header>
    <h3 id="l1">PROCESAR PAGO CON TARJETA DEBITO O CREDITO</h3>
    <!-- Contenedor principal para los métodos de pago -->
    <div class="metcards-container">

        <!-- Primer bloque de método de pago: Contra Entrega -->
        <div class="Bloque1">
          <div class="metcard">
            <div class="meta">
              <!-- Título y subtítulo del método de pago -->
              <span class="mettitle">CONFIRMA TU</span>
              <span class="price">PEDIDO</span>
    
              <!-- Imagen representativa del método de pago -->
              <img src="../IMAGENES/pngegg.png" alt="DOMICILIO" width="100">
            </div>
            <!-- Descripción del método de pago -->
           
            <ul class="lists">
                <li class="list">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Producto      <b>$70.000</b></span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Envio<b>$12.500</b></span>
                  </li>
                  <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Dias de alquiler <b>2 dias</b></span>
                  </li>
              </ul>
              <span class="mettitle2">Pagas $82.500</span>
            <!-- Botón para continuar con este método de pago -->
            <button onclick="proceso()" class="action">Alquilar</button>
          </div>
        </div>

<button onclick="politicas()" class="button2">POLITICAS DE ALQUILER</button>

</body>
</html>
