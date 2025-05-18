<?php
// Clase que representa un producto con sus atributos y métodos para acceder a ellos
class Producto {
    // Propiedades privadas para almacenar los datos del producto
    private $id;
    private $nombre;
    private $imagenUrl;
    private $precio;
    private $unidadTiempoPrecio;
    private $descripcionGeneral;
    private $urlDetalle;
      // Constructor que recibe todos los datos necesarios para crear un objeto Producto
    public function __construct($id, $nombre, $imagenUrl, $precio, $unidadTiempoPrecio, $descripcionGeneral, $urlDetalle) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->imagenUrl = $imagenUrl;
        $this->precio = $precio;
        $this->unidadTiempoPrecio = $unidadTiempoPrecio;
        $this->descripcionGeneral = $descripcionGeneral;
        $this->urlDetalle = $urlDetalle;
    }
     // Métodos públicos para obtener los valores de cada propiedad (getters)
    // Retorna el ID del producto
    public function getId() {
        return $this->id;
    }
     // Retorna el nombre del producto
    public function getNombre() {
        return $this->nombre;
    }
    // Retorna la URL de la imagen del producto
    public function getImagenUrl() {
        return $this->imagenUrl;
    }
    // Retorna el precio formateado como cadena con signo $ y miles separados por punto
    public function getPrecioFormateado() {
        return '$' . number_format($this->precio, 0, ',', '.');
    }
    // Retorna la unidad de tiempo a la que corresponde el precio (ejemplo: "hora", "día")
    public function getUnidadTiempoPrecio() {
        return $this->unidadTiempoPrecio;
    }
     // Retorna la descripción general del producto
    public function getDescripcionGeneral() {
        return $this->descripcionGeneral;
    }
    // Retorna la URL con información detallada del producto
    public function getUrlDetalle() {
        return $this->urlDetalle;
    }
}
?>
