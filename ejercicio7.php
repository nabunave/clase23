<!-- Creación de una clase Factory
● Crear una clase "Mascota" con las propiedades "nombre" y "edad".
● Crear una clase "Perro" que herede de "Mascota" y tenga una propiedad
adicional "raza".
● Crear una clase "Gato" que herede de "Mascota" y tenga una propiedad
adicional "pelaje".
● Crear una clase "MascotaFactory" con el método "crearMascota" que
reciba como parámetro una cadena que indique la especie de la mascota
("perro" o "gato") y devuelva un objeto del tipo correspondiente.-->

<?php
 j 
class Mascota {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

class Perro extends Mascota {
    private $raza;
    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }
}

class Gato extends Mascota {
    private $pelaje;
    public function __construct($nombre, $edad, $pelaje) {
        parent::__construct($nombre, $edad);
        $this->pelaje = $pelaje;
    }
}

class MascotaFactory {
    public static function crearMascota($especie, $nombre, $edad, $raza_o_pelaje) {
        if ($especie === "perro") {
            return new Perro($nombre, $edad, $raza_o_pelaje);
        } elseif ($especie === "gato") {
            return new Gato($nombre, $edad, $raza_o_pelaje);
        } else {
            return null;
        }
    }
}

$miPerro = MascotaFactory::crearMascota("perro", "perrito", 3, "golden");
$miGato = MascotaFactory::crearMascota("gato", "gatito mimoso", 2, "miley");