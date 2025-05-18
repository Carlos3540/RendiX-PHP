<?php

class CarritoCompra {
    // Propiedad para almacenar el carrito, referencia directa a la sesión
    private $carrito;
    // Constructor que inicializa el carrito en sesión si no existe
    public function __construct() {
        // Si no existe el carrito en la sesión, lo inicializa como un arreglo vacío
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
         // Asigna la referencia del carrito en sesión a la propiedad $carrito
        $this->carrito = &$_SESSION['carrito'];
    }
    // Método para agregar un producto al carrito
    public function agregarProducto($producto) {
         // Añade el producto al arreglo carrito
        $this->carrito[] = $producto;
    }
    // Método para obtener todos los productos almacenados en el carrito
    public function obtenerProductos() {
        return $this->carrito;
    }
    // Método para vaciar el carrito, eliminando todos los productos
     public function vaciarCarrito() {
    // Importa la configuración de conexión a la base de datos
    require_once(__DIR__ . '/../config/Conexion.php');
    $conn = Conexion::conectar();
    // Prepara la consulta SQL para eliminar todos los registros del carrito en la base de datos
    $query = $conn->prepare("DELETE FROM carrito");
    // Ejecuta la consulta
    $query->execute();
    // Limpia el carrito en la sesión, dejándolo como un arreglo vacío
    $_SESSION['carrito'] = []; 
}

// Método para calcular el total del carrito sumando los precios de todos los productos
    public function obtenerTotal() {
        $total = 0;
// Itera sobre cada producto y suma su precio al total
        foreach ($this->carrito as $producto) {
            $total += $producto['precio'];
        }
// Retorna el total calculado
        return $total;
    }
// Método para verificar si el carrito está vacío
    public function estaVacio() {
 // Retorna true si el carrito no tiene productos, false en caso contrario
        return empty($this->carrito);
    }
}
?>
