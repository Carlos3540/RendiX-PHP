<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/form-visa-mastercard.css">
    <script src="../JS/Botones.js"></script>

</head>
<body id="mastercard">
    <!-- Inicio del encabezado de la página -->
    <header>
      
          <div class="logo">
            <!-- Imagen del logo de RendiX -->
            <img src="../IMAGENES/RendiX.jpg" alt="Logo de Rendix">
          </div>
    </header>

<!-- Contenedor principal para los métodos de pago -->
<div class="container1">
    <div class="card1">
        <h3>MASTERCARD</h3>
        <div class="chip"></div>
        <div class="card-number">4575 6568 5785 6787</div>
        <div class="card-holder">OSCAR BLANCARTE</div>
        <div class="card-expiry">Valid Thru 10/20</div>
    </div>
    <form onsubmit="master(event)">
        <input type="text" placeholder="Número de la tarjeta" maxlength="16" required>
        <input type="text" placeholder="Nombre" required>
        <input type="text" placeholder="Fecha de expiración (MM/YY)" maxlength="5" required>
        <input type="text" placeholder="CVC" maxlength="4" required>
        <button type="submit">Pagar</button>
    </form>
</div>

</body>
</html>