<?php
session_start();
// Incluir la clase CarritoCompra y la configuración de conexión a la base de datos
require_once(__DIR__ . '/../modelo/CarritoCompra.php');
require_once(__DIR__ . '/../config/Conexion.php');
// Obtener datos enviados en el cuerpo de la solicitud POST en formato JSON y decodificarlos a un array asociativo
$datos = json_decode(file_get_contents("php://input"), true);

// Clase controlador para manejar la lógica del carrito de compras
class CarritoControlador {
    private $carrito;// Instancia del carrito de compras
    private $conn;  // Conexión a la base de datos
 // Constructor que inicializa el carrito y la conexión a la base de datos
    public function __construct() {
        $this->carrito = new CarritoCompra();
        $this->conn = Conexion::conectar(); // Establecer conexión con la base de datos
    }

    public function agregarProducto($productoId, $cantidad, $alquilar = false) {
          // Consulta para verificar si el producto existe y está disponible (disponible = 1)
        $query = $this->conn->prepare("SELECT * FROM productos WHERE id = :productoId AND disponible = 1");
        $query->bindParam(':productoId', $productoId, PDO::PARAM_INT);
        $query->execute();
        $producto = $query->fetch(PDO::FETCH_ASSOC);
         // Si el producto no existe o no está disponible, lanzar excepción
        if (!$producto) {
            throw new Exception('Producto no disponible o no encontrado.');
        }

        // Agregar producto al carrito en la base de datos
        $sql_carrito = "INSERT INTO carrito (producto_id, cantidad, fecha_agregado) VALUES (:productoId, :cantidad, NOW())";
        $stmt_carrito = $this->conn->prepare($sql_carrito);
        $stmt_carrito->bindParam(':productoId', $productoId, PDO::PARAM_INT);
        $stmt_carrito->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
        $stmt_carrito->execute();

        
    }
}

// Código que maneja la solicitud HTTP POST enviada al servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Validar que se hayan recibido los datos necesarios: producto_id y cantidad
    if (isset($datos['producto_id'], $datos['cantidad'])) {
        try {
            $controlador = new CarritoControlador();
            // Si se envió la opción de alquilar, convertir a booleano, si no, por defecto es false
            $alquilar = isset($datos['alquilar']) ? (bool) $datos['alquilar'] : false;
            // Llamar al método para agregar el producto al carrito
            $controlador->agregarProducto($datos['producto_id'], $datos['cantidad'], $alquilar);
             // Responder con un JSON indicando éxito y mensaje informativo
            echo json_encode(['success' => true, 'mensaje' => 'Producto agregado al carrito' . ($alquilar ? ' y alquilado' : '')]);
        } catch (Exception $e) {
            // En caso de error, responder con un JSON indicando fracaso y mensaje de error
            echo json_encode(['success' => false, 'mensaje' => $e->getMessage()]);
        }
    } else {
        // Responder con error si faltan datos en la solicitud
        echo json_encode(['success' => false, 'mensaje' => 'Datos incompletos']);
    }
} else {
    // Responder con error si se usa un método HTTP distinto a POST
    echo json_encode(['success' => false, 'mensaje' => 'Método no permitido']);
}
?>
