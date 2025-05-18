<?php
// conexion/Conexion.php

class Conexion {
    private static $host = "localhost";
    private static $db_name = "rendix";  //¡MUY IMPORTANTE TEAM poner el nombre aqui de la DB que tiene el PHP admin!    
    private static $username = "root";         
    private static $password = "";           
    private static $conn = null;

    // Método estático para obtener la conexión
    public static function conectar() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$db_name,
                    self::$username,
                    self::$password
                );

                // Configurar atributos
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->exec("SET NAMES utf8mb4");

            } catch (PDOException $e) {
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
?>
