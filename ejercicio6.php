<!-- Creación de una clase Singleton
● Crear una clase "ConexionDB" que utilice el patrón Singleton para
mantener una única conexión a una base de datos.
● Implementar un método "getConexion" que permita acceder a la
conexión en cualquier parte del código-->

<?php
class ConexionDB {
    private static $instancia = null; //esto guarda una unica instancia de conexion
    private $conexion;

    private function __construct() { // conectar a la base de datos (constructor privado para evitar crear instancias)
        $this->conexion = new PDO("mysql:host=localhost;dbname=bdd", "usuario", "contrasena");
    }

    public static function obtenerInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new ConexionDB();
        }
        return self::$instancia; // self accede a elementos de una clase dentro de la misma clase, es decir a la propia clase 
    }

    public function getConexion() { //obtener conexion
        return $this->conexion;
    }

    private function __clone() { //evitar clonar la instancia
    }
}

$conexion = ConexionDB::obtenerInstancia();

