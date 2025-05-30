<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Panel Administrador</title>
  <link rel="stylesheet" href="Style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff7f0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
  background: linear-gradient(45deg, #ff5500, #ff9500);  /* Degradado naranja más vibrante */
  padding: 20px 3000px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  box-shadow: 0 6px 18px rgba(255, 106, 0, 0.3);  /* Sombra más pronunciada con tinte naranja */
  border-bottom: 3px solid #ff4d00;  /* Borde inferior para más definición */
  color: white;  /* Texto en blanco para mejor contraste */
}

/* Logo */
.logo img {
  max-height: 100px;
  margin-right: 20px;
  height: 80px;
}

h1 {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  text-align: center;
  color: white;
  font-size: 2.5rem;
  font-weight: 700;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  margin-top: 2rem;
  line-height: 1.4;
}

    form {
      background: white;
      margin: 2rem auto;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      max-width: 500px;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input, textarea {
      padding: 0.8rem;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 1rem;
      width: 100%;
    }

    input[type="file"] {
      border: none;
    }

    button {
      background: #ff8c42;
      color: white;
      border: none;
      padding: 1rem;
      font-size: 1rem;
      border-radius: 8px;
      cursor: pointer;
    }

    @media screen and (max-width: 600px) {
      form {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="container">
        <div class="logo">
          <img src="IMAGENES/RENDIXblanco.png" alt="Logo de Rendix">
        </div>
        <H1> Panel de Administración RendiXMaster</H1></header>

  <form id="productForm">
    <input type="text" id="nombre" placeholder="Nombre del producto" required>
    <textarea id="descripcion" placeholder="Descripción del producto" required></textarea>
    <input type="number" id="valor" placeholder="Valor del producto" required>
    <input type="file" id="imagen" accept="image/*" required>
    <button type="submit">Agregar producto</button>
  </form>

  <script>
    const form = document.getElementById('productForm');

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      const nombre = document.getElementById('nombre').value;
      const descripcion = document.getElementById('descripcion').value;
      const valor = document.getElementById('valor').value;
      const imagenInput = document.getElementById('imagen');
      const imagenFile = imagenInput.files[0];

      const reader = new FileReader();

      reader.onload = function(e) {
        const producto = {
          nombre,
          descripcion,
          valor,
          imagen: e.target.result
        };

        // Guardar en localStorage
        let productos = JSON.parse(localStorage.getItem('productos')) || [];
        productos.push(producto);
        localStorage.setItem('productos', JSON.stringify(productos));

        alert("Producto agregado correctamente!");
        form.reset();
      };

      reader.readAsDataURL(imagenFile);
    });
  </script>
</body>
</html>
